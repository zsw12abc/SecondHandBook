<?php

/* faq_body.html */
class __TwigTemplate_68b2030ddf74e4a76a16a604023bf00a75ed79b84b021817af7874732594de64 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
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

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"faq-title\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("FAQ_TITLE");
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<div class=\"panel bg2\" id=\"faqlinks\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"column1\">
\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 40
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["faq_block"], "SWITCH_COLUMN", array()) || ((isset($context["SWITCH_COLUMN_MANUALLY"]) ? $context["SWITCH_COLUMN_MANUALLY"] : null) && ($this->getAttribute($context["faq_block"], "S_ROW_COUNT", array()) == 4)))) {
                // line 41
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"column2\">
\t\t\t\t\t";
            }
            // line 45
            echo "
\t\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t\t<dt><strong>";
            // line 47
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</strong></dt>
\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 49
                echo "\t\t\t\t\t\t\t<dd><a href=\"#f";
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\">";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</a></dd>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t</dl>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 58
            echo "\t\t\t<div class=\"panel ";
            if (($this->getAttribute($context["faq_block"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg2";
            } else {
                echo "bg1";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<div class=\"content\">
\t\t\t\t\t<h2 class=\"faq-title\">";
            // line 62
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</h2>
\t\t\t\t\t";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 64
                echo "\t\t\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t\t\t<dt id=\"f";
                // line 65
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</strong></dt>
\t\t\t\t\t\t\t<dd>";
                // line 66
                echo $this->getAttribute($context["faq_row"], "FAQ_ANSWER", array());
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 68
                if ( !$this->getAttribute($context["faq_row"], "S_LAST_ROW", array())) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 69
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
\t\t";
        // line 76
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "faq_body.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 77
        echo "\t\t
\t</div>
</div>

";
        // line 81
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 81)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 81,  248 => 77,  236 => 76,  233 => 75,  223 => 70,  217 => 69,  213 => 68,  208 => 66,  200 => 65,  197 => 64,  193 => 63,  189 => 62,  177 => 58,  173 => 57,  167 => 53,  160 => 51,  147 => 49,  143 => 48,  139 => 47,  135 => 45,  129 => 41,  126 => 40,  122 => 39,  107 => 27,  100 => 22,  99 => 21,  96 => 20,  94 => 19,  88 => 18,  87 => 17,  74 => 16,  72 => 15,  68 => 14,  59 => 13,  57 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  31 => 2,  19 => 1,);
    }
}
