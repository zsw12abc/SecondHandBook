<?php

/* memberlist_body.html */
class __TwigTemplate_b8e51691f83bffa62f7319aac3c47fe438961db0a1b12dce88f872affcadbf0e extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div id=\"memberlist_search\"";
            if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t<div class=\"chunk\" style=\"margin-top: 20px;\">
\t";
            // line 10
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 11
            echo "\t</div>
\t</div>
\t<form method=\"post\" action=\"";
            // line 13
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">

";
        }
        // line 16
        echo "
\t";
        // line 17
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 18
            echo "\t";
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                // line 19
                echo "\t\t<h2 class=\"group-title\"";
                if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                    echo " style=\"color:#";
                    echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                    echo ";\"";
                }
                echo ">";
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "</h2>

\t\t<p>";
                // line 21
                echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
                echo " ";
                echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
                echo "</p>
\t\t<p>
\t\t\t";
                // line 23
                if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                    echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
                }
                // line 24
                echo "\t\t\t";
                if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                    echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                }
                // line 25
                echo "\t\t\t";
                if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                    echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
                }
                // line 26
                echo "\t\t</p>
\t";
            } else {
                // line 28
                echo "\t<div id=\"wrap-subhead\">
\t\t<div class=\"chunk\">
\t\t\t<div class=\"wrap-subhead\">

\t\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t\t";
                // line 33
                $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
                $context['definition']->set('MICRODATA', $value);
                // line 34
                echo "\t\t\t\t\t";
                // line 35
                echo "\t\t\t\t\t<li class=\"breadcrumbs rightside\">
\t\t\t\t\t\t";
                // line 36
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo "<span class=\"crumb\"><a href=\"";
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                    echo "\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
                    echo " data-navbar-reference=\"home\">";
                    echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
                    echo "</a></span>";
                }
                // line 37
                echo "\t\t\t\t\t\t";
                // line 38
                echo "\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                echo "\" accesskey=\"h\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
                echo " data-navbar-reference=\"index\">";
                echo $this->env->getExtension('phpbb')->lang("INDEX");
                echo "</a></span>
\t\t\t\t\t\t";
                // line 39
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    // line 41
                    echo "\t\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
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
\t\t\t\t\t\t\t";
                    // line 42
                    // line 43
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t\t";
                // line 45
                echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 46
                // line 47
                echo "\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div id=\"subhead-title-sm\">
\t\t\t\t<h2 class=\"group-title\"";
                // line 52
                if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                    echo " style=\"color:#";
                    echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                    echo ";\"";
                }
                echo ">";
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "</h2>

\t\t\t\t<p>";
                // line 54
                echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
                echo " ";
                echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
                echo "</p>
\t\t\t\t";
                // line 55
                if ((((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) || (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null))) {
                    // line 56
                    echo "\t\t\t\t<p>
\t\t\t\t\t";
                    // line 57
                    if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                        echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
                    }
                    // line 58
                    echo "\t\t\t\t\t";
                    if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                        echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                    }
                    // line 59
                    echo "\t\t\t\t\t";
                    if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                        echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
                    }
                    // line 60
                    echo "\t\t\t\t</p>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t</div>

\t\t</div>
\t</div>
\t";
            }
            // line 67
            echo "
\t";
            // line 68
            if ( !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                // line 69
                echo "\t<div id=\"wrap-body\">
\t\t<div class=\"chunk\">
\t";
            }
            // line 72
            echo "\t";
        } else {
            // line 73
            echo "\t";
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                // line 74
                echo "\t\t<h2 class=\"solo\">";
                echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
                if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                    echo "\">";
                    echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                    echo "</a>";
                }
                echo "</h2>
\t";
            } else {
                // line 76
                echo "\t<div id=\"wrap-subhead\">
\t\t<div class=\"chunk\">
\t\t\t<div class=\"wrap-subhead\">

\t\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t\t";
                // line 81
                $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
                $context['definition']->set('MICRODATA', $value);
                // line 82
                echo "\t\t\t\t\t";
                // line 83
                echo "\t\t\t\t\t<li class=\"breadcrumbs rightside\">
\t\t\t\t\t\t";
                // line 84
                if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                    echo "<span class=\"crumb\"><a href=\"";
                    echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
                    echo "\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
                    echo " data-navbar-reference=\"home\">";
                    echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
                    echo "</a></span>";
                }
                // line 85
                echo "\t\t\t\t\t\t";
                // line 86
                echo "\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                echo "\" accesskey=\"h\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
                echo " data-navbar-reference=\"index\">";
                echo $this->env->getExtension('phpbb')->lang("INDEX");
                echo "</a></span>
\t\t\t\t\t\t";
                // line 87
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                    // line 88
                    echo "\t\t\t\t\t\t\t";
                    // line 89
                    echo "\t\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
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
\t\t\t\t\t\t\t";
                    // line 90
                    // line 91
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t\t\t\t";
                // line 93
                echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 94
                // line 95
                echo "\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div id=\"subhead-title\">
\t\t\t\t<h2 class=\"solo\">";
                // line 100
                echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
                if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                    echo "\">";
                    echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                    echo "</a>";
                }
                echo "</h2>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div id=\"wrap-body\">
\t\t<div class=\"chunk\">
\t";
            }
            // line 109
            echo "
\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 112
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif ((((isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 113
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 115
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t\t\t</strong>
\t\t\t</div>
\t\t
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 121
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 122
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 123
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 123)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 124
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 125
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 127
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 130
        echo "
\t\t\t\t";
        // line 131
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 132
            echo "\t\t\t\t<div class=\"forumbg forumbg-table\">
\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t<table class=\"table1\" id=\"memberlist\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
            // line 139
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t\t\t\t<th class=\"info\">";
            // line 140
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
            // line 141
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t\t\t\t";
            // line 142
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                echo "<th class=\"active\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 143
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 148
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 149
                echo "\t\t\t\t\t\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 151
                        echo "\t\t\t\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t\t\t\t<td colspan=\"";
                        // line 152
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "\t\t\t";
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 156
                        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t<div class=\"forumbg forumbg-table\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t";
                    // line 168
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 169
                        echo "\t\t\t\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
                        // line 170
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t\t\t\t<th class=\"info\">";
                        // line 171
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
                        // line 172
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t\t\t\t";
                        // line 173
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 174
                        echo "\t\t\t\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 175
                        echo "\t\t\t\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
                        // line 176
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t\t\t\t<th class=\"info\">";
                        // line 177
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t<th class=\"joined\">";
                        // line 178
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t\t\t\t";
                        // line 179
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 180
                        echo "\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                    // line 184
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 185
                    echo "\t\t\t\t\t\t\t";
                }
                // line 186
                echo "\t\t\t\t\t\t";
            }
            // line 187
            echo "
\t\t\t\t<tr class=\"";
            // line 188
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t\t\t<td><span class=\"rank-img\">";
            // line 189
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
            } else {
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
            }
            echo "</span>";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 190
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t\t\t\t<td class=\"info\">";
            // line 191
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t\t\t\t<td>";
            // line 192
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t\t\t\t";
            // line 193
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 194
            echo "\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 196
            echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
            // line 197
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 206
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 207
            echo "\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 208
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t\t\t\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 209
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t\t</fieldset>
\t\t\t";
        }
        // line 212
        echo "
\t\t\t";
        // line 213
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 214
            echo "\t\t\t</form>
\t\t\t<form method=\"post\" id=\"sort-results\" action=\"";
            // line 215
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
\t\t\t";
        }
        // line 217
        echo "
\t\t\t";
        // line 218
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 219
            echo "\t\t\t<fieldset class=\"display-options\">
\t\t\t\t<label for=\"sk\">";
            // line 220
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t\t\t\t<label for=\"sd\">";
            // line 221
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select></label>
\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 222
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
\t\t\t</fieldset>
\t\t\t";
        }
        // line 225
        echo "
\t\t\t</form>

\t\t\t<div class=\"action-bar bottom\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
        // line 230
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "
\t\t\t\t\t";
        // line 231
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t\t\t\t";
            // line 232
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 232)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 233
            echo "\t\t\t\t\t";
        } else {
            echo " 
\t\t\t\t\t\t &bull; ";
            // line 234
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t\t\t";
        }
        // line 236
        echo "\t\t\t\t</div>
\t\t\t</div>

";
        // line 239
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 240
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 240)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 242
            echo "\t\t\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 242)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 243
            echo "\t\t</div>
\t</div>
\t";
            // line 245
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 245)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  947 => 245,  943 => 243,  930 => 242,  916 => 240,  914 => 239,  909 => 236,  904 => 234,  899 => 233,  887 => 232,  883 => 231,  879 => 230,  872 => 225,  866 => 222,  860 => 221,  853 => 220,  850 => 219,  848 => 218,  845 => 217,  840 => 215,  837 => 214,  835 => 213,  832 => 212,  824 => 209,  820 => 208,  817 => 207,  815 => 206,  807 => 200,  792 => 197,  789 => 196,  783 => 194,  777 => 193,  773 => 192,  755 => 191,  741 => 190,  719 => 189,  711 => 188,  708 => 187,  705 => 186,  702 => 185,  699 => 184,  694 => 181,  691 => 180,  685 => 179,  681 => 178,  666 => 177,  662 => 176,  657 => 175,  654 => 174,  646 => 173,  640 => 172,  625 => 171,  619 => 170,  600 => 169,  598 => 168,  590 => 162,  582 => 156,  579 => 155,  569 => 152,  566 => 151,  563 => 150,  560 => 149,  557 => 148,  551 => 147,  545 => 143,  537 => 142,  531 => 141,  516 => 140,  510 => 139,  488 => 138,  480 => 132,  478 => 131,  475 => 130,  470 => 127,  465 => 125,  460 => 124,  448 => 123,  444 => 122,  440 => 121,  434 => 117,  423 => 115,  419 => 114,  416 => 113,  398 => 112,  393 => 109,  373 => 100,  366 => 95,  365 => 94,  362 => 93,  360 => 92,  354 => 91,  353 => 90,  340 => 89,  338 => 88,  334 => 87,  325 => 86,  323 => 85,  313 => 84,  310 => 83,  308 => 82,  305 => 81,  298 => 76,  284 => 74,  281 => 73,  278 => 72,  273 => 69,  271 => 68,  268 => 67,  261 => 62,  257 => 60,  252 => 59,  247 => 58,  243 => 57,  240 => 56,  238 => 55,  232 => 54,  221 => 52,  214 => 47,  213 => 46,  210 => 45,  208 => 44,  202 => 43,  201 => 42,  188 => 41,  186 => 40,  182 => 39,  173 => 38,  171 => 37,  161 => 36,  158 => 35,  156 => 34,  153 => 33,  146 => 28,  142 => 26,  137 => 25,  132 => 24,  128 => 23,  121 => 21,  109 => 19,  106 => 18,  104 => 17,  101 => 16,  95 => 13,  91 => 11,  79 => 10,  71 => 8,  58 => 7,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
