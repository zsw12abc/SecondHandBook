<?php

/* attachment.html */
class __TwigTemplate_8ee455f12e23521d4742ea925f58ad91e7c73cafd47d1eca9f1efc7001a71752 extends Twig_Template
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
        echo "
";
        // line 2
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "_file", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 5
            echo "\t";
            if ($this->getAttribute($context["_file"], "S_DENIED", array())) {
                // line 6
                echo "\t<p>[";
                echo $this->getAttribute($context["_file"], "DENIED_MESSAGE", array());
                echo "]</p>
\t";
            } else {
                // line 8
                echo "
\t\t";
                // line 9
                // line 10
                echo "
\t\t";
                // line 11
                if ($this->getAttribute($context["_file"], "S_THUMBNAIL", array())) {
                    // line 12
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 13
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["_file"], "THUMB_IMAGE", array());
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "\" /></a></dt>
\t\t\t";
                    // line 14
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</dd>";
                    }
                    // line 15
                    echo "\t\t</dl>
\t\t";
                }
                // line 17
                echo "

\t\t";
                // line 19
                if ($this->getAttribute($context["_file"], "S_IMAGE", array())) {
                    // line 20
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 21
                    echo $this->getAttribute($context["_file"], "U_INLINE_LINK", array());
                    echo "\" class=\"postimage\" alt=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t\t";
                    // line 22
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 23
                    echo "\t\t\t<dd>";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 26
                echo "
\t\t";
                // line 27
                if ($this->getAttribute($context["_file"], "S_FILE", array())) {
                    // line 28
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>";
                    // line 29
                    if ($this->getAttribute($context["_file"], "UPLOAD_ICON", array())) {
                        echo $this->getAttribute($context["_file"], "UPLOAD_ICON", array());
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a></dt>
\t\t\t";
                    // line 30
                    if ($this->getAttribute($context["_file"], "COMMENT", array())) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", array());
                        echo "</em></dd>";
                    }
                    // line 31
                    echo "\t\t\t<dd>(";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 34
                echo "


\t\t";
                // line 37
                if ($this->getAttribute($context["_file"], "S_WM_FILE", array())) {
                    // line 38
                    echo "\t\t\t<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->
\t\t\t<object width=\"320\" height=\"285\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_";
                    // line 39
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\">
\t\t\t\t<param name=\"url\" value=\"";
                    // line 40
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t<param name=\"src\" value=\"";
                    // line 49
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<!--[if !IE]>-->
\t\t\t\t\t<object width=\"320\" height=\"285\" type=\"video/x-ms-wmv\" data=\"";
                    // line 51
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">
\t\t\t\t\t\t<param name=\"src\" value=\"";
                    // line 52
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t\t\t<param name=\"controller\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showcontrols\" value=\"1\" />
\t\t\t\t\t\t<param name=\"showdisplay\" value=\"0\" />
\t\t\t\t\t\t<param name=\"showstatusbar\" value=\"0\" />
\t\t\t\t\t\t<param name=\"autosize\" value=\"1\" />
\t\t\t\t\t\t<param name=\"autostart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"visible\" value=\"1\" />
\t\t\t\t\t\t<param name=\"animationstart\" value=\"0\" />
\t\t\t\t\t\t<param name=\"loop\" value=\"0\" />
\t\t\t\t\t</object>
\t\t\t\t<!--<![endif]-->
\t\t\t</object>

\t\t";
                } elseif ($this->getAttribute(                // line 66
$context["_file"], "S_FLASH_FILE", array())) {
                    // line 67
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", array());
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 68
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 74
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", array());
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", array());
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute(                // line 76
$context["_file"], "S_QUICKTIME_FILE", array())) {
                    // line 77
                    echo "\t\t\t<object id=\"qtstream_";
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0\" width=\"320\" height=\"285\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 78
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"controller\" value=\"true\" />
\t\t\t\t<param name=\"autoplay\" value=\"false\" />
\t\t\t\t<param name=\"type\" value=\"video/quicktime\" />
\t\t\t\t<embed name=\"qtstream_";
                    // line 82
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" src=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" pluginspage=\"http://www.apple.com/quicktime/download/\" enablejavascript=\"true\" controller=\"true\" width=\"320\" height=\"285\" type=\"video/quicktime\" autoplay=\"false\"></embed>
\t\t\t</object>
\t\t";
                } elseif ($this->getAttribute(                // line 84
$context["_file"], "S_RM_FILE", array())) {
                    // line 85
                    echo "\t\t\t<object id=\"rmstream_";
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"200\" height=\"50\">
\t\t\t\t<param name=\"src\" value=\"";
                    // line 86
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" />
\t\t\t\t<param name=\"autostart\" value=\"false\" />
\t\t\t\t<param name=\"controls\" value=\"ImageWindow\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 89
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" />
\t\t\t\t<param name=\"prefetch\" value=\"false\" />
\t\t\t\t<embed name=\"rmstream_";
                    // line 91
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" src=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\" width=\"0\" height=\"0\" autostart=\"false\" controls=\"ImageWindow\" console=\"ctrls_";
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" prefetch=\"false\"></embed>
\t\t\t</object>
\t\t\t<br />
\t\t\t<object id=\"ctrls_";
                    // line 94
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"0\" height=\"36\">
\t\t\t\t<param name=\"controls\" value=\"ControlPanel\" />
\t\t\t\t<param name=\"console\" value=\"ctrls_";
                    // line 96
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" />
\t\t\t\t<embed name=\"ctrls_";
                    // line 97
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\" type=\"audio/x-pn-realaudio-plugin\" width=\"200\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_";
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo "\"></embed>
\t\t\t</object>

\t\t\t<script type=\"text/javascript\">
\t\t\t// <![CDATA[
\t\t\t\tif (document.rmstream_";
                    // line 102
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".GetClipWidth)
\t\t\t\t{
\t\t\t\t\twhile (!document.rmstream_";
                    // line 104
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".GetClipWidth())
\t\t\t\t\t{
\t\t\t\t\t}

\t\t\t\t\tvar width = document.rmstream_";
                    // line 108
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".GetClipWidth();
\t\t\t\t\tvar height = document.rmstream_";
                    // line 109
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".GetClipHeight();

\t\t\t\t\tdocument.rmstream_";
                    // line 111
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".width = width;
\t\t\t\t\tdocument.rmstream_";
                    // line 112
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".height = height;
\t\t\t\t\tdocument.ctrls_";
                    // line 113
                    echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                    echo ".width = width;
\t\t\t\t}
\t\t\t// ]]>
\t\t\t</script>
\t\t";
                }
                // line 118
                echo "
\t\t";
                // line 119
                if (((($this->getAttribute($context["_file"], "S_WM_FILE", array()) || $this->getAttribute($context["_file"], "S_RM_FILE", array())) || $this->getAttribute($context["_file"], "S_FLASH_FILE", array())) || $this->getAttribute($context["_file"], "S_QUICKTIME_FILE", array()))) {
                    // line 120
                    echo "\t\t\t<p>
\t\t\t";
                    // line 121
                    if ($this->getAttribute($context["_file"], "S_QUICKTIME_FILE", array())) {
                        echo "<a href=\"#\" onclick=\"play_qt_file(document.qtstream_";
                        echo $this->getAttribute($context["_file"], "ATTACH_ID", array());
                        echo "); return false;\">[ ";
                        echo $this->env->getExtension('phpbb')->lang("PLAY_QUICKTIME_FILE");
                        echo " ]</a> ";
                    }
                    // line 122
                    echo "\t\t\t<a href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", array());
                    echo "</a> [ ";
                    echo $this->getAttribute($context["_file"], "FILESIZE", array());
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", array());
                    echo " | ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", array());
                    echo " ]</p>
\t\t";
                }
                // line 124
                echo "
\t\t";
                // line 125
                // line 126
                echo "
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
";
        // line 130
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 130,  372 => 129,  364 => 126,  363 => 125,  360 => 124,  346 => 122,  338 => 121,  335 => 120,  333 => 119,  330 => 118,  322 => 113,  318 => 112,  314 => 111,  309 => 109,  305 => 108,  298 => 104,  293 => 102,  283 => 97,  279 => 96,  274 => 94,  264 => 91,  259 => 89,  253 => 86,  248 => 85,  246 => 84,  239 => 82,  232 => 78,  227 => 77,  225 => 76,  216 => 74,  207 => 68,  200 => 67,  198 => 66,  181 => 52,  177 => 51,  172 => 49,  160 => 40,  156 => 39,  153 => 38,  151 => 37,  146 => 34,  135 => 31,  129 => 30,  119 => 29,  116 => 28,  114 => 27,  111 => 26,  98 => 23,  92 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 17,  73 => 15,  67 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  42 => 9,  39 => 8,  33 => 6,  30 => 5,  26 => 4,  23 => 3,  22 => 2,  19 => 1,);
    }
}
