{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Themes']}</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="{$_url}appearance/themes_post/">


                            <div class="mb-3">
                                <label for="theme">{$_L['Theme']}</label>
                                <select name="theme" id="theme" class="form-control">

                                    {foreach $themes|default:array() as $theme}
                                        <option value="{$theme}"
                                                {if $config['theme'] eq $theme}selected="selected" {/if}>{ucfirst($theme)}</option>
                                    {/foreach}

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="frontend_theme">{__('Frontend Theme')}</label>
                                <select name="frontend_theme" id="frontend_theme" class="form-control">
                                    <option value="">{__('Default')}</option>
                                    {foreach $frontend_themes|default:array() as $frontend_theme}
                                        <option value="{$frontend_theme}"
                                                {if !empty($config['frontend_theme']) and $config['frontend_theme'] eq $frontend_theme}selected="selected" {/if}>{ucfirst($frontend_theme)}</option>
                                    {/foreach}

                                </select>
                            </div>



                            <input type="hidden" name="nstyle" value="dark">

                            <button type="submit" class="btn btn-primary"> {$_L['Submit']}</button>
                        </form>
                    </div>



                </div>
            </div>










        </div>




    </div>
{/block}
