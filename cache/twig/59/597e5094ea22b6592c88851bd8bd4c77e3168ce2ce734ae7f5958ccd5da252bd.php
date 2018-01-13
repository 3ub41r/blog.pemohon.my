<?php

/* partials/modal-wizard.html.twig */
class __TwigTemplate_b21a1d8e54997aae86a68d36390a5a751e534cae85e7bb3e3da2892114c7370e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["settings"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array");
        // line 2
        $context["frontend_url"] = twig_trim_filter(($this->getAttribute(($context["uri"] ?? null), "base", array()) . ($context["base_url_relative_frontend"] ?? null)), "/");
        // line 3
        echo "<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Wizard</h1>
    ";
        // line 6
        if ($this->getAttribute(($context["git_sync"] ?? null), "git_installed", array())) {
            // line 7
            echo "    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will help you set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository. When done you will have a bi-directional synchronization link between your site and the <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        ";
            // line 20
            $context["selectedRepo"] = ((twig_in_filter("allothers", $this->getAttribute(($context["settings"] ?? null), "repository", array()))) ? ("allothers") : (($context["selectedRepo"] ?? null)));
            // line 21
            echo "        ";
            $context["selectedRepo"] = ((twig_in_filter("github.com", $this->getAttribute(($context["settings"] ?? null), "repository", array()))) ? ("github") : (($context["selectedRepo"] ?? null)));
            // line 22
            echo "        ";
            $context["selectedRepo"] = ((twig_in_filter("bitbucket.com", $this->getAttribute(($context["settings"] ?? null), "repository", array()))) ? ("bitbucket") : (($context["selectedRepo"] ?? null)));
            // line 23
            echo "        ";
            $context["selectedRepo"] = ((twig_in_filter("gitlab.com", $this->getAttribute(($context["settings"] ?? null), "repository", array()))) ? ("gitlab") : (($context["selectedRepo"] ?? null)));
            // line 24
            echo "
        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select the <i class=\"fa fa-fw fa-git\"></i> repository-hosting service that you will be using to remotely store your data. Once you picked one, insert the username and password or token to access the service. Passwords are saved securely.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" ";
            // line 33
            echo (((($context["selectedRepo"] ?? null) == "github")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/github.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" ";
            // line 38
            echo (((($context["selectedRepo"] ?? null) == "bitbucket")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/bitbucket.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" ";
            // line 43
            echo (((($context["selectedRepo"] ?? null) == "gitlab")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/gitlab.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                     <label>
                        <input type=\"radio\" value=\"allothers\" name=\"gitsync[repository]\" ";
            // line 48
            echo (((($context["selectedRepo"] ?? null) == "allothers")) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/gitlogo.svg"), "html", null, true);
            echo "\" />
                         <small>(any Git service with webhooks)</small>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "user", array()), "")) : ("")), "html", null, true);
            echo "\" />
                    </label>
                    <label>
                        Git Password or Token
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"\" />
                    </label>
                </div>
            </div>

            <div class=\"access-tokens wizard-padding\">
                <h3>Access Tokens and 2FA (Two-factor Authentication)</h3>
                <p>If you have never used Access Tokens or don't know what 2FA is, you most likely only need your <strong>regular password</strong> for the field above. You can then skip this step and press <strong>Next</strong> to continue.</p>

                <p><a href=\"#\" class=\"button\" data-access-tokens-details>More Details <i class=\"fa fa-fw fa-chevron-down\"></i></a></p>

                <div class=\"access-tokens-details\" style=\"display: none;\">
                    <p>With GitSync you have the option to use an Access Token instead of your password, however if you have <strong>2FA (Two-factor authentication)</strong> enabled for your git service, you can use Access Tokens.</p>

                    <p>Using a token is more secure than using your password, because you can limit what can be done using it and it can be revoked without worrying about changing the password. As we are just syncing, we only need to give it read-and-write access to repositories and webhooks.
                    </p>

                    <div class=\"hidden-step-github hidden\">
                        <h4>GitHub</h4>
                        <p>
                            With <a href=\"https://help.github.com/articles/creating-an-access-token-for-command-line-use/\" target=\"_blank\">GitHub's Personal Access Tokens</a>, select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>repo</code> (Full control of private repositories)</li>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>admin:repo_hook</code> (Full control of repository hooks)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-bitbucket hidden\">
                        <h4>Bitbucket</h4>
                        <p>
                            With <a href=\"https://confluence.atlassian.com/bitbucket/app-passwords-828781300.html\" target=\"_blank\">BitBucket's App Passwords</a>, select the following Permissions:
                        </p>

                        <ul>
                            <li>Repositories:
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read</code></li>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Write</code></li>
                                </ul>
                            </li>
                            <li>Webhooks
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read and write</code></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-gitlab hidden\">
                        <h4>GitLab</h4>
                        <p>
                            For <a href=\"https://docs.gitlab.com/ee/api/README.html#personal-access-tokens\" target=\"_blank\">GitLab's Personal Access Tokens</a> select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>API</code> (Access your API)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-allothers hidden\">
                        <h4>Other Git Repositories</h4>

                        <p>Usually under your profile settings is where you can generate a new Access Token. You want to ensure that you have enough read/write access for the repository as well as <code>webhook</code> access</p>
                    </div>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to use, you can skip this step. Otherwise please continue reading.
            </p>

            <p>If you are going to set up the repository now, please ensure you also make a commit as the service provider offers to do when it is created (whether it's the README or .gitignore). GitSync won't work unless the repository has at least one commit.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>
            <div class=\"hidden-step-allothers wizard-padding hidden\">
              <h4>Other Git Repositories</h4>

            </div>

            <p>
                Once you created your repository, insert below the full HTTPS URL for the repository you just created. This is the URL used to clone the repository. All services offer both SSH and HTTPS URLs but it is recommended to only use HTTPS.
            </p>

            <p class=\"hidden-step-bitbucket hidden\">
                When you copy the HTTPS URL from Bitbucket, it also adds <code>your-user@</code> at the beginning of the URL which is not needed and should be removed. The URL be something like <code>https://bitbucket.org/your-user/your-repository.git</code>
            </p>

            <p>
                <label>
                    Git Repository
                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"";
            // line 178
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "repository", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "repository", array()), "")) : ("")), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"";
            // line 194
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "\">
            <p>
                The Webhook allows to synchronize the site every time a change happens in the repository. The Webhook is an URL that needs to be setup in the repository. By Default the Webhook is set to <code>/_git-sync</code> but you can change it to whatever name you'd like.</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"";
            // line 201
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p>
                In order to setup the Webhook in your repository, please follow the steps below. If you haven't already created a repository from the previous steps, now is the time to do so.
            </p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code>-button on the right</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>";
            // line 218
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <em>leave empty</em></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code>-button at the top</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, eg. GitSync</em></li>
                            <li><strong>URL</strong>: <code>";
            // line 239
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code>-button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i></code> dropdown-button at the top right of the page</li>
                    <li>Select <code>Integrations</code> (or <code>Webhooks</code> if < v8.16) from the list</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>";
            // line 255
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-allothers wizard-padding hidden\">
                <h4>Other git systems (Generic)</h4>
                <ol>
                 <li>
                  Locate the area where you add the webhook in the repository. This will likely be in the settings for the repository you are adding.
                  </li>
                  <li>
                  Please note this is an advanced option and dependent on the choice of git solution in use.
                  </li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>";
            // line 276
            echo twig_escape_filter($this->env, ($context["frontend_url"] ?? null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    ";
            // line 332
            echo "
    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    ";
        } else {
            // line 340
            echo "        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> is missing from your hosting provider, you should open a ticket with them and request it to be installed.
                </p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    ";
        }
        // line 354
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 354,  391 => 340,  381 => 332,  361 => 276,  335 => 255,  314 => 239,  288 => 218,  268 => 201,  258 => 194,  239 => 178,  114 => 56,  104 => 49,  100 => 48,  93 => 44,  89 => 43,  82 => 39,  78 => 38,  71 => 34,  67 => 33,  56 => 24,  53 => 23,  50 => 22,  47 => 21,  45 => 20,  30 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set settings = config.plugins['git-sync'] %}
{% set frontend_url = (uri.base ~ base_url_relative_frontend)|trim('/') %}
<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Wizard</h1>
    {% if git_sync.git_installed %}
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will help you set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository. When done you will have a bi-directional synchronization link between your site and the <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        {% set selectedRepo = 'allothers' in settings.repository ? 'allothers' : selectedRepo %}
        {% set selectedRepo = 'github.com' in settings.repository ? 'github' : selectedRepo %}
        {% set selectedRepo = 'bitbucket.com' in settings.repository ? 'bitbucket' : selectedRepo %}
        {% set selectedRepo = 'gitlab.com' in settings.repository ? 'gitlab' : selectedRepo %}

        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select the <i class=\"fa fa-fw fa-git\"></i> repository-hosting service that you will be using to remotely store your data. Once you picked one, insert the username and password or token to access the service. Passwords are saved securely.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" {{ selectedRepo == 'github' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/github.svg') }}\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" {{ selectedRepo == 'bitbucket' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/bitbucket.svg') }}\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" {{ selectedRepo == 'gitlab' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/gitlab.svg') }}\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                     <label>
                        <input type=\"radio\" value=\"allothers\" name=\"gitsync[repository]\" {{ selectedRepo == 'allothers' ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/gitlogo.svg') }}\" />
                         <small>(any Git service with webhooks)</small>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"{{ settings.user|default('') }}\" />
                    </label>
                    <label>
                        Git Password or Token
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"\" />
                    </label>
                </div>
            </div>

            <div class=\"access-tokens wizard-padding\">
                <h3>Access Tokens and 2FA (Two-factor Authentication)</h3>
                <p>If you have never used Access Tokens or don't know what 2FA is, you most likely only need your <strong>regular password</strong> for the field above. You can then skip this step and press <strong>Next</strong> to continue.</p>

                <p><a href=\"#\" class=\"button\" data-access-tokens-details>More Details <i class=\"fa fa-fw fa-chevron-down\"></i></a></p>

                <div class=\"access-tokens-details\" style=\"display: none;\">
                    <p>With GitSync you have the option to use an Access Token instead of your password, however if you have <strong>2FA (Two-factor authentication)</strong> enabled for your git service, you can use Access Tokens.</p>

                    <p>Using a token is more secure than using your password, because you can limit what can be done using it and it can be revoked without worrying about changing the password. As we are just syncing, we only need to give it read-and-write access to repositories and webhooks.
                    </p>

                    <div class=\"hidden-step-github hidden\">
                        <h4>GitHub</h4>
                        <p>
                            With <a href=\"https://help.github.com/articles/creating-an-access-token-for-command-line-use/\" target=\"_blank\">GitHub's Personal Access Tokens</a>, select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>repo</code> (Full control of private repositories)</li>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>admin:repo_hook</code> (Full control of repository hooks)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-bitbucket hidden\">
                        <h4>Bitbucket</h4>
                        <p>
                            With <a href=\"https://confluence.atlassian.com/bitbucket/app-passwords-828781300.html\" target=\"_blank\">BitBucket's App Passwords</a>, select the following Permissions:
                        </p>

                        <ul>
                            <li>Repositories:
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read</code></li>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Write</code></li>
                                </ul>
                            </li>
                            <li>Webhooks
                                <ul>
                                    <li><i class=\"fa fa-check-square-o\"></i> <code>Read and write</code></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-gitlab hidden\">
                        <h4>GitLab</h4>
                        <p>
                            For <a href=\"https://docs.gitlab.com/ee/api/README.html#personal-access-tokens\" target=\"_blank\">GitLab's Personal Access Tokens</a> select the following Scopes:
                        </p>

                        <ul>
                            <li><i class=\"fa fa-check-square-o\"></i> <code>API</code> (Access your API)</li>
                        </ul>
                    </div>

                    <div class=\"hidden-step-allothers hidden\">
                        <h4>Other Git Repositories</h4>

                        <p>Usually under your profile settings is where you can generate a new Access Token. You want to ensure that you have enough read/write access for the repository as well as <code>webhook</code> access</p>
                    </div>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to use, you can skip this step. Otherwise please continue reading.
            </p>

            <p>If you are going to set up the repository now, please ensure you also make a commit as the service provider offers to do when it is created (whether it's the README or .gitignore). GitSync won't work unless the repository has at least one commit.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>
            <div class=\"hidden-step-allothers wizard-padding hidden\">
              <h4>Other Git Repositories</h4>

            </div>

            <p>
                Once you created your repository, insert below the full HTTPS URL for the repository you just created. This is the URL used to clone the repository. All services offer both SSH and HTTPS URLs but it is recommended to only use HTTPS.
            </p>

            <p class=\"hidden-step-bitbucket hidden\">
                When you copy the HTTPS URL from Bitbucket, it also adds <code>your-user@</code> at the beginning of the URL which is not needed and should be removed. The URL be something like <code>https://bitbucket.org/your-user/your-repository.git</code>
            </p>

            <p>
                <label>
                    Git Repository
                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"{{ settings.repository|default('') }}\" />
                </label>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"{{ frontend_url }}\">
            <p>
                The Webhook allows to synchronize the site every time a change happens in the repository. The Webhook is an URL that needs to be setup in the repository. By Default the Webhook is set to <code>/_git-sync</code> but you can change it to whatever name you'd like.</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"{{ settings.webhook|default('/_git-sync') }}\" />
                </label>
            </p>

            <p>
                In order to setup the Webhook in your repository, please follow the steps below. If you haven't already created a repository from the previous steps, now is the time to do so.
            </p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code>-button on the right</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <em>leave empty</em></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code>-button at the top</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, eg. GitSync</em></li>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code>-button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i></code> dropdown-button at the top right of the page</li>
                    <li>Select <code>Integrations</code> (or <code>Webhooks</code> if < v8.16) from the list</li>
                    <li>
                        Fill out the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code>-button</li>
                </ol>
            </div>

            <div class=\"hidden-step-allothers wizard-padding hidden\">
                <h4>Other git systems (Generic)</h4>
                <ol>
                 <li>
                  Locate the area where you add the webhook in the repository. This will likely be in the settings for the repository you are adding.
                  </li>
                  <li>
                  Please note this is an advanced option and dependent on the choice of git solution in use.
                  </li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    {#<div class=\"step-4\">
        <h1>Step 4 - Choose what to Synchronize</h1>
        <div class=\"panel hidden disabled\">
            <p>
                You can choose to synchronize any portion of the <strong>user/</strong> folder independently. It is highly encouraged not to synchronize the <strong>config/</strong>- and <strong>data/</strong>-folders because they might contain sensitive data you might not realize gets shared publicly.
            </p>

            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"config\" name=\"gitsync[folders]\" disabled />
                        Config
                    </label>
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"data\" name=\"gitsync[folders]\" disabled />
                        Data
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"pages\" name=\"gitsync[folders]\" {{ not settings.folders or 'pages' in settings.folders ? 'checked' : '' }} />
                        Pages
                    </label>
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"plugins\" name=\"gitsync[folders]\" disabled />
                        Plugins
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"themes\" name=\"gitsync[folders]\" disabled />
                        Themes
                    </label>
                </div>
                <div class=\"column\">
                    <p>Description when hovering over one of the Items on left</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut cupiditate dolorem, exercitationem hic illo in modi nisi nobis nostrum nulla quae quaerat quas, quo repellendus sapiente sed suscipit vero?</p>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>#}

    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    {% else %}
        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> is missing from your hosting provider, you should open a ticket with them and request it to be installed.
                </p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    {% endif %}
</div>
", "partials/modal-wizard.html.twig", "/var/www/blog.pemohon.my/user/plugins/git-sync/templates/partials/modal-wizard.html.twig");
    }
}
