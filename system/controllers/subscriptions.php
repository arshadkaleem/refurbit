<?php

use Stripe\Checkout\Session;
use Stripe\Stripe;

if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

$action = route(1);
switch ($request_method) {
    case 'GET':
        switch ($action) {
            case '':
            case 'list':
                authenticate_admin();
                $tab = route(2,'active');


                $plans = SubscriptionPlan::get()->keyBy('id');

                $subscriptions = new Subscription;

                if($tab == 'active'){
                    $subscriptions = $subscriptions->where('status','Active');
                }
                elseif($tab == 'inactive'){
                    $subscriptions = $subscriptions->where('status','Inactive');
                }
                elseif ($tab == 'suspended') {
                    $subscriptions = $subscriptions->where('status','Suspended');
                }
                elseif ($tab == 'cancelled') {
                    $subscriptions = $subscriptions->where('status','Cancelled');
                }

                $subscriptions = $subscriptions->get();







                $contacts = Contact::get()->keyBy('id');



                \view('subscriptions', [
                    'selected_navigation' => 'subscriptions',
                    'tab' => $tab,
                    'subscriptions' => $subscriptions,
                    'plans' => $plans,
                    'contacts' => $contacts,
                ]);

                break;
            case 'delete-subscription':
                authenticate_admin();
                $plan = false;
                $id = (int) route(2, false);
                if ($id !== 0) {
                    $plan = Subscription::find($id);
                    if ($plan) {
                        $plan->delete();
                    }
                }
                redirect_to('subscriptions/list');
                break;


            case 'cancel-subscription':
                $plan = false;
                $id = (int) route(2, false);

                if ($id !== 0) {
                    $subscription = Subscription::find($id);

                    if ($subscription) {
                        $subscription->status = 'Cancelled';
                        $subscription->save();
                    }
                }
                redirect_to('subscriptions/my-subscriptions');
                break;

            case 'subscribe':
                require APP_SYSTEM_PATH . '/controllers/default/client/init.php';
                $slug = route(2);
                $plan = SubscriptionPlan::where('slug', $slug)->first();

                if (!$plan) {
                    abort(404);
                }

                $user = Contact::isLoggedIn();

                if(!$user){
                    $ui->assign('layouts_client','layouts/paper.tpl');
                }


                \view('subscribe', [
                    'selected_navigation' => 'subscriptions',
                    'plan' => $plan,
                    'user' => $user,
                ]);

                break;

            case 'view-subscription':
                $user = Contact::isLoggedIn();

                require APP_SYSTEM_PATH . '/controllers/default/client/init.php';
                $id = route(2);

                $subscription = Subscription::find($id);

                if(!$subscription) {
                    abort(404);
                }

                $plan = SubscriptionPlan::find($subscription->plan_id);

                \view('client_subscription_view', [
                    'selected_navigation' => 'subscriptions',
                    'plan' => $plan,
                    'user' => $user,
                    'subscription' => $subscription,
                ]);

                break;

            case 'add':
            case 'edit':
                authenticate_admin();
                $id = (int) route(2, false);
                $subscription = false;
                if ($id !== 0) {
                    $subscription = Subscription::find($id);
                }
                $plans = SubscriptionPlan::limit(100)->get();
                $contacts = Contact::all();



                \view('subscription', [
                    'selected_navigation' => 'subscriptions',
                    'subscription' => $subscription,
                    'contacts' => $contacts,
                    'plans' => $plans,

                ]);
                break;

            case 'plans':
                authenticate_admin();
                $plans = SubscriptionPlan::all();
                \view('subscription_plans', [
                    'selected_navigation' => 'subscriptions',
                    'plans' => $plans,
                ]);
                break;

            case 'plan':
                authenticate_admin();
                require APP_SYSTEM_PATH . '/controllers/default/client/init.php';

                $plan = false;
                $id = (int) route(2, false);
                if ($id !== 0) {
                    $plan = SubscriptionPlan::find($id);
                }

                \view('subscription_plan', [
                    'selected_navigation' => 'subscriptions',
                    'plan' => $plan,
                ]);

                break;

            case 'delete-plan':
                authenticate_admin();
                $plan = false;
                $id = (int) route(2, false);
                if ($id !== 0) {
                    $plan = SubscriptionPlan::find($id);
                    if ($plan) {
                        $plan->delete();
                    }
                }
                redirect_to('subscriptions/plans');
                break;

            case 'summary':
                authenticate_admin();
                \view('subscriptions_summary', [
                    'selected_navigation' => 'subscriptions',
                ]);
                break;

            case 'all-subscriptions':

                require APP_SYSTEM_PATH . '/controllers/default/client/init.php';

                $user = Contacts::details();
                $subscriptions = SubscriptionPlan::get()->keyBy('id');

                $plans = SubscriptionPlan::get()->keyBy('id');

                $contacts = Contact::get()->keyBy('id');


                $projects = Project::where('contact_id', $user->id)
                    ->select([
                        'id',
                        'name',
                        'status',
                        'summary',
                        'start_date',
                        'due_date',
                    ])
                    ->get();

                view('client_subscriptions_all', [
                    'selected_navigation' => 'subscriptions',
                    'user' => $user,
                    'projects' => $projects,
                    'subscriptions' => $subscriptions,
                    'plans' => $plans ,
                ]);
                break;





            case 'my-subscriptions':

                require APP_SYSTEM_PATH . '/controllers/default/client/init.php';

                $user = Contacts::details();
                $subscriptions = Subscription::where('contact_id', $user->id)->get();
                $plans = SubscriptionPlan::get()->keyBy('id');


                $projects = Project::where('contact_id', $user->id)
                    ->select([
                        'id',
                        'name',
                        'status',
                        'summary',
                        'start_date',
                        'due_date',
                    ])
                    ->get();

                view('client_subscription', [
                    'selected_navigation' => 'subscriptions',
                    'user' => $user,
                    'projects' => $projects,
                    'subscriptions' => $subscriptions,
                    'plans' => $plans ,
                ]);
                break;
        }


    case 'POST':
        switch ($action) {
            case 'plan':
                authenticate_admin();
                $data = $request->all();

                $validation = Validation::init();
                $validator = $validation->make($data, [
                    'title' => 'required|string|max:150',
                    'slug' => 'required|string|max:150',
                    'button_text' => 'required|string|max:150',
                    'stripe_pricing_id' => 'nullable|string|max:150',
                    'description' => 'nullable|string|max:65000',
                    'features' => 'nullable|array',
                    'id' => 'nullable|integer',
                ]);

                if ($validator->fails()) {
                    responseWithError($validator->errors());
                }

                $subscription_plan = null;

                if (!empty($data['id'])) {
                    $subscription_plan = SubscriptionPlan::find($data['id']);
                }

                if (!$subscription_plan) {
                    $subscription_plan = new SubscriptionPlan();
                }

                $subscription_plan->title = $data['title'];
                $subscription_plan->slug = $data['slug'];
                $subscription_plan->button_text = $data['button_text'];
                $subscription_plan->stripe_pricing_id =
                    $data['stripe_pricing_id'] ?? null;
                $subscription_plan->description = $data['description'] ?? null;

                $price = $data['price'] ?? null;
                $price = createFromCurrency($price, $config['home_currency']);

                $subscription_plan->price = $price;

                $features = [];

                if (!empty($data['features'])) {
                    foreach ($data['features'] as $feature) {
                        if ($feature) {
                            $features[] = $feature;
                        }
                    }
                }
                $subscription_plan->features = json_encode($features);
                $subscription_plan->save();

                api_response([
                    'id' => $subscription_plan->id,
                ]);

                break;

            case 'subscription':
                authenticate_admin();
                $data = $request->all();

                $validation = Validation::init();
                $validator = $validation->make($data, [
                    'contact_id' => 'required|integer',
                    'plan_id' => 'required|integer',
                    'start_date' => 'required|date',
                ]);

                if ($validator->fails()) {
                    responseWithError($validator->errors());
                }

                $subscription = null;

                $subscription = empty($data['id']) ? new Subscription() : Subscription::find($data['id']);

                $subscription_plan = SubscriptionPlan::find($data['plan_id']);

                if (!$subscription_plan) {
                    responseWithError(__('Plan not found'));
                }

                $contact = Contact::find($data['contact_id']);

                if (!$contact) {
                    responseWithError(__('Contact not found'));
                }

                $type = $data['type'] ?? 'Monthly';

                if($type == 'Monthly'){
                    $subscription->next_renewal_date = date('Y-m-d', strtotime('+1 month', strtotime($data['start_date'])));
                }
                else{
                    $subscription->next_renewal_date = date('Y-m-d', strtotime('+1 year', strtotime($data['start_date'])));
                }

                $subscription->contact_id = $contact->id;
                $subscription->plan_id = $subscription_plan->id;


                $subscription->start_date = $data['start_date'];
                $subscription->type = $data['type'];
                $subscription->status = $data['status'];
//                $subscription->amount = $subscription->amount;
                $subscription->save();
                break;

            case 'stripe-create-checkout-session':

                $payment_gateway = PaymentGateway::getByApiName('stripe');

                if ($payment_gateway) {
                    Stripe::setApiKey($payment_gateway->c1);

                    // The price ID passed from the front end.
                    $priceId = $_POST['priceId'];

                    try{
                        $session = Session::create([
                            'success_url' => BASE_URL.'subscriptions/success/{CHECKOUT_SESSION_ID}',
                            'cancel_url' => BASE_URL,
                            'mode' => 'subscription',
                            'line_items' => [
                                [
                                    'price' => $priceId,
                                    // For metered billing, do not pass quantity
                                    'quantity' => 1,
                                ],
                            ],
                        ]);

                        if(!empty($session->url))
                        {
                            header("HTTP/1.1 303 See Other");
                            header("Location: " . $session->url);
                            exit;
                        }
                    }
                    catch(Exception $exception)
                    {
                        abort(500, $exception->getMessage());
                    }


                }

                abort(404,__('Payment gateway is not configured.'));

                break;

            case 'success':

                redirect_to(BASE_URL.'client/dashboard/');

                break;



        }
        break;
}
