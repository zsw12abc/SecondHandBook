<?php

/* site_sidebar.html */
class __TwigTemplate_7564586324a02a1da4b939764288b2290ca9c689a883d58a4a35a1d0b64aca9e extends Twig_Template
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
        echo "<div id=\"sidebar\">

\t<div class=\"side-block\">
\t\t<img src=\"";
        // line 4
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/rate_it.jpg\" alt=\"Rate it\">
\t</div>

\t";
        // line 7
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 8
            echo "\t<div class=\"side-block side-login\">
\t\t<form method=\"post\" action=\"";
            // line 9
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
\t\t\t<h4 class=\"side-block-head\"><a href=\"";
            // line 10
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h4>
\t\t\t<div class=\"side-block-body\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /><input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t";
            // line 15
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 16
                echo "\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 19
                echo "\t\t\t\t\t\t<label for=\"autologin\" id=\"remember-me\"><input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" />";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label>
\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button1\" />
\t\t\t\t\t";
            // line 23
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</form>
\t</div>
\t";
        }
        // line 29
        echo "
\t<div class=\"side-block\">
\t\t<h4 class=\"side-block-head\">Lorem ipsum</h4>
\t\t<div class=\"side-block-body\">
\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t</div>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "site_sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 23,  88 => 22,  85 => 21,  79 => 19,  76 => 18,  68 => 16,  66 => 15,  55 => 13,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
