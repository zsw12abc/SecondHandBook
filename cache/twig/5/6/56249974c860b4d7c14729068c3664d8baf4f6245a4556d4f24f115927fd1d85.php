<?php

/* search_results.html */
class __TwigTemplate_56249974c860b4d7c14729068c3664d8baf4f6245a4556d4f24f115927fd1d85 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t";
        // line 10
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 11
        echo "\t\t\t\t";
        // line 12
        echo "\t\t\t\t<li class=\"breadcrumbs rightside\">
\t\t\t\t\t";
        // line 13
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo " data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 14
        echo "\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo " data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 17
            echo "\t\t\t\t\t\t";
            // line 18
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
            // line 19
            // line 20
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 23
        // line 24
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"";
        // line 28
        if ((((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null) || (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) || (isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null))) {
            echo "subhead-title-sm";
        } else {
            echo "subhead-title";
        }
        echo "\">
\t\t\t<h2 class=\"searchresults-title\">";
        // line 29
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
\t\t\t
\t\t\t";
        // line 31
        if ((((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null) || (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) || (isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null))) {
            // line 32
            echo "\t\t\t<p id=\"subhead-more\">
";
            // line 33
            if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
                echo "</strong>";
            }
            // line 34
            if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
                echo "</strong>";
            }
            // line 35
            if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
                echo "</strong>";
            }
            // line 36
            echo "\t\t\t</p>
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
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 47
            echo "\t\t\t<p class=\"jumpbox-return\"><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " left-box\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
\t\t";
        } else {
            // line 49
            echo "\t\t\t<p class=\"jumpbox-return\"><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " left-box\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
\t\t";
        }
        // line 51
        echo "
\t\t";
        // line 52
        // line 53
        echo "
\t\t";
        // line 54
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 55
            echo "\t\t\t<div class=\"action-bar top\">
\t\t\t\t
\t\t\t";
            // line 57
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 58
                echo "\t\t\t\t<div class=\"search-box\" role=\"search\">
\t\t\t\t\t<form method=\"post\" id=\"topic-search\" action=\"";
                // line 59
                echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
                echo "\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<input class=\"inputbox search\"  type=\"search\" name=\"add_keywords\" id=\"add_keywords\" size=\"20\" placeholder=\"";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t\t\t<button class=\"button\" type=\"submit\" title=\"";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
            }
            // line 67
            echo "
\t\t\t\t";
            // line 68
            // line 69
            echo "
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
            // line 71
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t\t\t";
            // line 72
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 73
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 73)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 74
                echo "\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 80
        echo "
\t\t";
        // line 81
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 82
            echo "
\t\t\t";
            // line 83
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 84
                echo "\t\t\t<div class=\"forumbg\">

\t\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 90
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"posts\">";
                // line 91
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"views\">";
                // line 92
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist topics\">

\t\t\t\t";
                // line 99
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 100
                    echo "\t\t\t\t\t";
                    // line 101
                    echo "\t\t\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t\t\t<dl class=\"icon ";
                    // line 102
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t\t\t<dt ";
                    // line 103
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array())) {
                        echo "style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 104
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t\t\t";
                    // line 107
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-gavel\"></i></a>";
                    }
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-recycle\"></i></a>";
                    }
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-exclamation-triangle\"></i></a>";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a><br />
\t\t\t\t\t\t\t\t\t";
                    // line 109
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
                        // line 112
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</span></li>";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_NEXT", array())) {
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo "<span class=\"topic-ap\"><i class=\"fa fa-tasks\"></i></span>";
                    }
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        echo "<span class=\"topic-ap\"><i class=\"fa fa-floppy-o\"></i></span>";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                    // line 119
                    // line 120
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 123
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</dd>
\t\t\t\t\t\t\t<dd class=\"views\">";
                    // line 124
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</dd>
\t\t\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t\t\t";
                    // line 126
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 127
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\" class=\"lastpost-last\"><i class=\"fa fa-arrow-right\"></i></a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "<br /> </span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    // line 131
                    // line 132
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            } else {
                // line 138
                echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 140
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 144
            echo "
\t\t";
        } else {
            // line 146
            echo "
\t\t\t";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 148
                echo "\t\t\t\t";
                // line 149
                echo "\t\t\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t\t\t<div class=\"inner\">

\t\t\t";
                // line 152
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 153
                    echo "\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t";
                    // line 154
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t<dl class=\"postprofile\">
\t\t\t\t\t";
                    // line 158
                    // line 159
                    echo "\t\t\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t\t\t<dd class=\"search-result-date\">";
                    // line 160
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t\t\t<dd>";
                    // line 161
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t\t\t<dd>";
                    // line 162
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t\t\t<dd>";
                    // line 163
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t\t\t<dd>";
                    // line 164
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t\t\t";
                    // line 165
                    // line 166
                    echo "\t\t\t\t</dl>

\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t<h3><a href=\"";
                    // line 169
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t\t\t<div class=\"content\">";
                    // line 170
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 173
                echo "
\t\t\t";
                // line 174
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 175
                    echo "\t\t\t\t<ul class=\"searchresults\">
\t\t\t\t\t<li ><a href=\"";
                    // line 176
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\" class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t\t\t</ul>
\t\t\t";
                }
                // line 179
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 182
                // line 183
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 184
                echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 186
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t";
        }
        // line 191
        echo "
\t\t";
        // line 192
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 193
            echo "\t\t\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">

\t\t\t<fieldset class=\"display-options\">
\t\t\t\t";
            // line 196
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 197
                echo "\t\t\t\t\t<label>";
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    echo "</label> <label>";
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "</label>
\t\t\t\t\t<label>";
                    // line 198
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                }
                echo "</label>
\t\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t\t\t";
            }
            // line 201
            echo "\t\t\t</fieldset>

\t\t\t</form>
\t\t";
        }
        // line 205
        echo "
\t\t";
        // line 206
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 207
            echo "\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 209
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t\t";
            // line 210
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 211
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 211)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 212
                echo "\t\t\t\t";
            } else {
                // line 213
                echo "\t\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 215
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 218
        echo "
\t\t";
        // line 219
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 219)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 220
        echo "
\t</div>
</div>

";
        // line 224
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 224)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  759 => 224,  753 => 220,  741 => 219,  738 => 218,  733 => 215,  727 => 213,  724 => 212,  711 => 211,  709 => 210,  705 => 209,  701 => 207,  699 => 206,  696 => 205,  690 => 201,  685 => 199,  680 => 198,  665 => 197,  663 => 196,  656 => 193,  654 => 192,  651 => 191,  648 => 190,  638 => 186,  634 => 184,  629 => 183,  628 => 182,  623 => 179,  613 => 176,  610 => 175,  608 => 174,  605 => 173,  599 => 170,  593 => 169,  588 => 166,  587 => 165,  580 => 164,  573 => 163,  564 => 162,  555 => 161,  551 => 160,  544 => 159,  543 => 158,  540 => 157,  534 => 154,  531 => 153,  529 => 152,  515 => 149,  513 => 148,  508 => 147,  505 => 146,  501 => 144,  494 => 140,  490 => 138,  483 => 133,  477 => 132,  476 => 131,  461 => 127,  455 => 126,  450 => 124,  446 => 123,  441 => 120,  440 => 119,  425 => 118,  420 => 117,  415 => 116,  410 => 113,  385 => 112,  381 => 110,  379 => 109,  356 => 108,  355 => 107,  351 => 105,  345 => 104,  334 => 103,  330 => 102,  321 => 101,  319 => 100,  315 => 99,  306 => 93,  302 => 92,  298 => 91,  294 => 90,  286 => 84,  284 => 83,  281 => 82,  279 => 81,  276 => 80,  271 => 77,  265 => 75,  262 => 74,  249 => 73,  247 => 72,  243 => 71,  239 => 69,  238 => 68,  235 => 67,  227 => 62,  223 => 61,  218 => 59,  215 => 58,  213 => 57,  209 => 55,  207 => 54,  204 => 53,  203 => 52,  200 => 51,  188 => 49,  178 => 47,  176 => 46,  166 => 38,  162 => 36,  156 => 35,  148 => 34,  140 => 33,  137 => 32,  135 => 31,  118 => 29,  110 => 28,  104 => 24,  103 => 23,  100 => 22,  98 => 21,  92 => 20,  91 => 19,  78 => 18,  76 => 17,  72 => 16,  63 => 15,  61 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
