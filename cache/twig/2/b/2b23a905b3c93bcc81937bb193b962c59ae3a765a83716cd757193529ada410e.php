<?php

/* ucp_agreement.html */
class __TwigTemplate_2b23a905b3c93bcc81937bb193b962c59ae3a765a83716cd757193529ada410e extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t";
        // line 8
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 9
        echo "\t\t\t\t";
        // line 10
        echo "\t\t\t\t<li class=\"breadcrumbs rightside\">
\t\t\t\t\t";
        // line 11
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo " data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 12
        echo "\t\t\t\t\t";
        // line 13
        echo "\t\t\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo " data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 15
            echo "\t\t\t\t\t\t";
            // line 16
            echo "\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo ">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</a></span>
\t\t\t\t\t\t";
            // line 17
            // line 18
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 21
        // line 22
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"";
        // line 26
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            echo "subhead-title-sm";
        } else {
            echo "subhead-title";
        }
        echo "\">
\t\t\t";
        // line 27
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 28
            echo "\t\t\t<h2 class=\"sitename-title\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
        } elseif (        // line 29
(isset($context["S_AGREEMENT"]) ? $context["S_AGREEMENT"] : null)) {
            // line 30
            echo "\t\t\t<h2 class=\"sitename-title\">";
            echo (isset($context["AGREEMENT_TITLE"]) ? $context["AGREEMENT_TITLE"] : null);
            echo "</h2>
\t\t\t";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 34
            echo "\t\t\t<p id=\"subhead-mods\">
\t\t\t\t";
            // line 35
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
\t\t\t</p>
\t\t\t";
        }
        // line 38
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 46
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 47
            echo "
\t\t";
            // line 48
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 49
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\t/**
\t\t\t* Change language
\t\t\t*/
\t\t\tfunction change_language(lang_iso)
\t\t\t{
\t\t\t\tdocument.cookie = '";
                // line 56
                echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
                echo "_lang=' + lang_iso + '; path=";
                echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
                echo "';
\t\t\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\t\t\tdocument.forms['register'].submit();
\t\t\t}

\t\t// ]]>
\t\t</script>
\t\t";
            }
            // line 64
            echo "
\t\t";
            // line 65
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 66
                echo "\t\t\t<form method=\"post\" action=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" id=\"register\">
\t\t\t\t<p class=\"rightside\">
\t\t\t\t\t<label for=\"lang\">";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo "\">";
                echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
                echo "</select>
\t\t\t\t\t";
                // line 69
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>

\t\t\t<div class=\"clear\"></div>

\t\t";
            }
            // line 76
            echo "
\t\t\t<form method=\"post\" action=\"";
            // line 77
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\" id=\"agreement\">

\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 82
            // line 83
            echo "\t\t\t\t\t<p>";
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t\t\t";
            // line 84
            // line 85
            echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
            // line 92
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                // line 93
                echo "\t\t\t\t\t<strong><a href=\"";
                echo (isset($context["U_COPPA_NO"]) ? $context["U_COPPA_NO"] : null);
                echo "\" class=\"button1\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_NO");
                echo "</a></strong><a href=\"";
                echo (isset($context["U_COPPA_YES"]) ? $context["U_COPPA_YES"] : null);
                echo "\" class=\"button2\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_YES");
                echo "</a>";
            } else {
                echo "<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("AGREE");
                echo "\" class=\"button1\" /><input type=\"submit\" name=\"not_agreed\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t";
            // line 96
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>

\t\t";
        } elseif (        // line 102
(isset($context["S_AGREEMENT"]) ? $context["S_AGREEMENT"] : null)) {
            // line 103
            echo "
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p>";
            // line 107
            echo (isset($context["AGREEMENT_TEXT"]) ? $context["AGREEMENT_TEXT"] : null);
            echo "</p>
\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t\t<p><a href=\"";
            // line 109
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" class=\"button2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a></p>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        }
        // line 115
        echo "
\t</div>
</div>

";
        // line 119
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 119)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 119,  308 => 115,  297 => 109,  292 => 107,  286 => 103,  284 => 102,  275 => 96,  270 => 95,  252 => 93,  250 => 92,  241 => 85,  240 => 84,  231 => 83,  230 => 82,  222 => 77,  219 => 76,  209 => 69,  200 => 68,  194 => 66,  192 => 65,  189 => 64,  176 => 56,  167 => 49,  165 => 48,  162 => 47,  160 => 46,  150 => 38,  137 => 35,  134 => 34,  132 => 33,  129 => 32,  123 => 30,  121 => 29,  116 => 28,  114 => 27,  106 => 26,  100 => 22,  99 => 21,  96 => 20,  94 => 19,  88 => 18,  87 => 17,  74 => 16,  72 => 15,  68 => 14,  59 => 13,  57 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  31 => 2,  19 => 1,);
    }
}
