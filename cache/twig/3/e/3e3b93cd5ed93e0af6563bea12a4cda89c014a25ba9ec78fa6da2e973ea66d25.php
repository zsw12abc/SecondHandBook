<?php

/* site_menu.html */
class __TwigTemplate_3e3b93cd5ed93e0af6563bea12a4cda89c014a25ba9ec78fa6da2e973ea66d25 extends Twig_Template
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
        echo "<li class=\"site-menu\"><a href=\"http://www.linghang.education/\">领航主页</a></li>
";
        // line 2
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<li class=\"site-menu\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>";
        }
        // line 3
        echo "<li class=\"site-menu\"><a href=\"http://uni.linghang.education/\">领航大学</a></li>
<li class=\"site-menu\"><a href=\"http://train.linghang.education/\">领航培训</a></li>
";
        // line 5
        // line 6
    }

    public function getTemplateName()
    {
        return "site_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  34 => 5,  30 => 3,  22 => 2,  19 => 1,);
    }
}
