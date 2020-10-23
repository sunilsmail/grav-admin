<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages.html.twig */
class __TwigTemplate_5c35ea034c0173f55db8d7ba6335231e3695975feb1da3de42a1fc014dc37ac7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 8
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        }
        // line 11
        if ($this->getAttribute(($context["uri"] ?? null), "param", [0 => "new"], "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
($context["context"] ?? null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute(($context["context"] ?? null), "exists", [])) {
                // line 16
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", []))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", [])) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", []), "title", [])) : ($this->getAttribute(($context["context"] ?? null), "title", []))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", [])) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "warnings", []), "delete_page", []);
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "admin_lang", [])) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", []);
        // line 31
        $context["type"] = "page";
        // line 114
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
            // line 115
            $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) : ("/"));
            // line 116
            $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
            // line 117
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        } else {
            // line 119
            $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", [])) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", []))))) : ("/"));
            // line 120
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", [])) ? ((((("<a class=\"button\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        $context["theScope"] = (((($context["mode"] ?? null) == "edit")) ? ("page") : ("pages"));
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "first"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 40
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => $context["sheet"]], "method");
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "before:parent"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 43
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => $context["sheet"]], "method");
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "after:parent"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 49
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => $context["sheet"]], "method");
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "last"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 52
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => $context["sheet"]], "method");
            // line 53
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $context["theScope"] = (((($context["mode"] ?? null) == "edit")) ? ("page") : ("pages"));
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "first"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 61
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "link")) {
                // line 62
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", []), "html", null, true);
                echo "\" />
        ";
            }
            // line 64
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "twig")) {
                // line 65
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", []), "pages.html.twig", 65)->display($context);
                // line 66
                echo "        ";
            }
            // line 67
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "javascript")) {
                // line 68
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 69
                echo "        ";
            }
            // line 70
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "before:parent"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 74
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "link")) {
                // line 75
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", []), "html", null, true);
                echo "\" />
        ";
            }
            // line 77
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "twig")) {
                // line 78
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", []), "pages.html.twig", 78)->display($context);
                // line 79
                echo "        ";
            }
            // line 80
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "javascript")) {
                // line 81
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 82
                echo "        ";
            }
            // line 83
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "after:parent"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 88
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "link")) {
                // line 89
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", []), "html", null, true);
                echo "\" />
        ";
            }
            // line 91
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "twig")) {
                // line 92
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", []), "pages.html.twig", 92)->display($context);
                // line 93
                echo "        ";
            }
            // line 94
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "javascript")) {
                // line 95
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 96
                echo "        ";
            }
            // line 97
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    ";
        // line 99
        echo "    ";
        // line 100
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "last"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 101
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "link")) {
                // line 102
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", []), "html", null, true);
                echo "\" />
        ";
            }
            // line 104
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "twig")) {
                // line 105
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", []), "pages.html.twig", 105)->display($context);
                // line 106
                echo "        ";
            }
            // line 107
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "javascript")) {
                // line 108
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 109
                echo "        ";
            }
            // line 110
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    ";
    }

    // line 201
    public function block_titlebar($context, array $blocks = [])
    {
        // line 202
        echo "    <div class=\"button-bar\">
        ";
        // line 203
        if ((($context["mode"] ?? null) == "list")) {
            // line 204
            echo "            ";
            // line 205
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 206
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 208
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 211
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "bar")) {
                    // line 212
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a>
                ";
                }
                // line 214
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "
            ";
            // line 217
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 218
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 220
            echo "            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 230
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                // line 231
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 233
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 234
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "dropdown")) {
                    // line 235
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 237
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "                    ";
            // line 239
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=pages))", ($context["context"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 240
                echo "                        ";
                $context["key"] = (($this->getAttribute($context["item"], "form_id", [])) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", [])) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", []))) : (""));
                // line 241
                echo "                        <li><a class=\"button\" ";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", []), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                    ";
            // line 244
            echo "                </ul>
            </div>

            ";
            // line 248
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 249
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 251
            echo "            ";
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", [])) {
                // line 252
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 255
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), ($context["admin_lang"] ?? null), [], "array");
                // line 256
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 258
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", [])) > 1)) {
                    // line 259
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 263
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 264
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 265
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 266
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", [])) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 268
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo "                    </ul>
                    ";
                }
                // line 271
                echo "                </div>
            ";
            }
            // line 273
            echo "
            ";
            // line 275
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 276
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 278
            echo "        ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 279
            echo "
            ";
            // line 280
            echo ($context["preview_link"] ?? null);
            echo "

            ";
            // line 283
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 284
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 286
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 288
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", [], "method"), "children", [], "method");
            // line 289
            echo "
            ";
            // line 290
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                // line 291
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                // line 292
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", []))));
                // line 293
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 295
            echo "
            ";
            // line 296
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method")) {
                // line 297
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["context"] ?? null), "path", [])], "method");
                // line 298
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", []), "routes", []), "default", [])) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", []))));
                // line 299
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 301
            echo "
            ";
            // line 303
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 304
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 306
            echo "            
            ";
            // line 307
            if (($context["exists"] ?? null)) {
                // line 308
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 310
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 316
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 318
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
                    // line 319
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 321
                echo "                        ";
                // line 322
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=page))", ($context["context"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 323
                    echo "                            ";
                    $context["key"] = (($this->getAttribute($context["item"], "form_id", [])) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", [])) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", []))) : (""));
                    // line 324
                    echo "                            <li><a class=\"button\" ";
                    echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", []), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "                        ";
                // line 327
                echo "                    </ul>
                </div>

                ";
                // line 331
                echo "                ";
                if (($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render_count("action", "page:more", "any", ($context["context"] ?? null)) > 0)) {
                    // line 332
                    echo "                    <div class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\" href=\"#\">
                            <i class=\"fa fa-plus-square\"></i> ";
                    // line 334
                    echo "More";
                    echo "
                        </button>
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\">
                            ";
                    // line 340
                    echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page:more", "any", ($context["context"] ?? null));
                    echo "
                        </ul>
                    </div>
                ";
                }
                // line 344
                echo "                ";
                // line 345
                echo "
                <a class=\"button disable-after-click\" href=\"";
                // line 346
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "copy"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 347
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 348
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", [])) {
                    // line 349
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 351
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 352
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 354
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 356
                echo "            ";
            }
            // line 357
            echo "
            ";
            // line 359
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 360
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 362
            echo "            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 363
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 364
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", []))) {
                // line 365
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", [])) {
                    // line 366
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 370
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 371
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", []), $context["langCode"], [], "array");
                        // line 372
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 373
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 375
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 376
                    echo "                        </ul>
                    ";
                }
                // line 378
                echo "                ";
            }
            // line 379
            echo "            </div>

            ";
            // line 382
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 383
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 385
            echo "
        ";
        }
        // line 387
        echo "    </div>
    ";
        // line 388
        if ((($context["mode"] ?? null) == "new")) {
            // line 389
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 390
($context["mode"] ?? null) == "edit")) {
            // line 391
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", []), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 395
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 399
    public function block_content($context, array $blocks = [])
    {
        // line 400
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 401
        if ((($context["mode"] ?? null) == "new")) {
            // line 402
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 402)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "pages/page"], "method"), "data" => ($context["context"] ?? null)]));
            // line 403
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 404
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 407
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", []) && ($context["page_lang"] ?? null))) {
                // line 408
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 410
                if (($context["exists"] ?? null)) {
                    // line 411
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 413
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 415
                echo "                        </button>
                        ";
                // line 416
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", [])) > 1))) {
                    // line 417
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 421
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", []));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 422
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 423
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", []), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 425
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 426
                    echo "                            </ul>
                        ";
                }
                // line 428
                echo "                    </div>
                ";
            }
            // line 430
            echo "
                ";
            // line 431
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", [])) {
                // line 432
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 433
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 434
                echo "                ";
                $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
                // line 435
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", [0 => ($context["normalText"] ?? null), 1 => ($context["maxLen"] ?? null)], "method");
                // line 436
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", [0 => ($context["expertText"] ?? null), 1 => ($context["maxLen"] ?? null)], "method");
                // line 437
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 439
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 440
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 441
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 442
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 447
            echo "
            </div>

            ";
            // line 450
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", []), "fields", []) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0"))) {
                // line 451
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 451)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", []), "data" => ($context["context"] ?? null)]));
                // line 452
                echo "            ";
            } else {
                // line 453
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 453)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")], "method"), "data" => ($context["context"] ?? null)]));
                // line 454
                echo "            ";
            }
            // line 455
            echo "        </div>
    ";
        } else {
            // line 457
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 459
            echo twig_escape_filter($this->env, twig_jsonencode_filter([0 => ["id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")], 1 => ["id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")], 2 => ["id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")]]), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", []), $this->getAttribute(($context["admin"] ?? null), "modularTypes", []))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", [])), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 462
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 465
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 466
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 471
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null), 1 => 0, 2 => $context], "method");
            echo "
            </ul>
            ";
            // line 473
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 473)->display($context);
            // line 474
            echo "        </div>
    ";
        }
        // line 476
        echo "    </div>

    ";
        // line 478
        if (($context["context"] ?? null)) {
            // line 479
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 480
            echo "
        ";
            // line 481
            if ((($context["mode"] ?? null) == "edit")) {
                // line 482
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", [0 => ""], "method");
                // line 483
                echo "        ";
            }
            // line 484
            echo "    ";
        }
        // line 485
        echo "
    ";
        // line 486
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 487
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 488
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 488)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page"]));
            // line 489
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 492
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 492)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder"]));
            // line 493
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 496
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 496)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular"]));
            // line 497
            echo "    </div>

    ";
            // line 499
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 500
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", []), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 501
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", []), "partials/blueprints-new.html.twig"), "pages.html.twig", 501)->display(twig_array_merge($context, twig_array_merge(["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => $this->getAttribute($context["add_modal"], "blueprint", [])], "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"], $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", []), []))));
                // line 502
                echo "        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            echo "        
    ";
            // line 506
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter((("(&(objectClass=action)(menu=page:add)(scope=" . (((($context["mode"] ?? null) == "list")) ? ("pages") : ("page"))) . "))"), ($context["context"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 507
                echo "        ";
                if ($this->getAttribute($context["item"], "form_id", [])) {
                    // line 508
                    echo "            ";
                    $context["form_data"] = $this->getAttribute($context["item"], "form_data", [0 => ($context["context"] ?? null)], "method");
                    // line 509
                    echo "            <div class=\"remodal\" data-remodal-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", []), "html", null, true);
                    echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                    // line 510
                    $this->loadTemplate("partials/blueprints-new-custom.html.twig", "pages.html.twig", 510)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute($context["item"], "form_blueprint", []), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", [])]));
                    // line 511
                    echo "            </div>
        ";
                }
                // line 513
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("action", (((($context["mode"] ?? null) == "list")) ? ("pages") : ([0 => "page", 1 => "page:more"])), "any", ($context["context"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 515
                echo "        ";
                if ($this->getAttribute($context["item"], "form_id", [])) {
                    // line 516
                    echo "            ";
                    $context["form_data"] = $this->getAttribute($context["item"], "form_data", [0 => ($context["context"] ?? null)], "method");
                    // line 517
                    echo "            <div class=\"remodal\" data-remodal-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", []), "html", null, true);
                    echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                    // line 518
                    $this->loadTemplate("partials/blueprints-new-custom.html.twig", "pages.html.twig", 518)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute($context["item"], "form_blueprint", []), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", [])]));
                    // line 519
                    echo "            </div>
        ";
                }
                // line 521
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "    ";
            // line 523
            echo "    ";
        }
        // line 524
        echo "

    ";
        // line 526
        if ((($context["mode"] ?? null) == "edit")) {
            // line 527
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 529
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 529)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method"), "data" => ($context["context"] ?? null)]));
            // line 530
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 532
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate([0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"], "pages.html.twig", 532);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display(twig_array_merge($context, ["data" => ($context["context"] ?? null)]));
            }
            // line 533
            echo "    </div>
    ";
        }
        // line 535
        echo "
    ";
        // line 536
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 536)->display($context);
        // line 537
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 542
        if (($context["context"] ?? null)) {
            // line 543
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", []), "html", null, true);
            echo "</strong>
                ";
        }
        // line 545
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 557
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 557);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 558
        echo "
";
    }

    // line 561
    public function block_bottom($context, array $blocks = [])
    {
        // line 562
        echo "<script>
    ";
        // line 563
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>

";
        // line 568
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
        // line 570
        echo "    
    ";
        // line 572
        echo "    ";
        $context["like_data"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "like_data"], "method");
        // line 573
        echo "    ";
        $context["like_page"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "like_page"], "method");
        // line 574
        echo "    ";
        if (($context["like_page"] ?? null)) {
            // line 575
            echo "    <script>
        let title2 = \$('input[name=\"data[header][title]\"]');
        title2.val('";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "use_title"], "method"), "html", null, true);
            echo "');
    
        let content2 = \$('textarea[name=\"data[content]\"]');
        content2.val(";
            // line 580
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "use_content"], "method"));
            echo ");

        {
            let c = \$('input[name=\"data[header][body_classes]\"]');
            c.val('";
            // line 584
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["like_page"] ?? null), "header", []), "body_classes", []), "html", null, true);
            echo "');
        }

        {
            let c = \$('select[name=\"data[name]\"]');
            c.val('";
            // line 589
            echo twig_escape_filter($this->env, $this->getAttribute(($context["like_page"] ?? null), "template", []), "html", null, true);
            echo "');
        }

        ";
            // line 592
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "use_taxonomy"], "method"));
            foreach ($context['_seq'] as $context["name"] => $context["items"]) {
                // line 593
                echo "            let tax";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " = \$('select[name=\"data[header][taxonomy][";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "][]\"]');
            tax";
                // line 594
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ".val(";
                echo twig_jsonencode_filter($context["items"]);
                echo ");
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 596
            echo "    </script>
    ";
        }
        // line 598
        echo "    ";
        // line 599
        echo "    
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 124
            echo "    ";
            $context["config"] = $this->getAttribute(($context["twig_vars"] ?? null), "config", [], "array");
            // line 125
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            // line 126
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "pages_list_display_field", []);
            // line 127
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", [], "array");
            // line 128
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", [], "array");
            // line 129
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", [], "array");
            // line 130
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", [], "array");
            // line 131
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", [], "array");
            // line 132
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", [], "array");
            // line 133
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", [], "array");
            // line 134
            echo "
    ";
            // line 135
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "admin", []), "children_display_order", []) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []))) {
                // line 136
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])) {
                    // line 137
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "custom", [])], "method");
                    // line 138
                    echo "        ";
                } else {
                    // line 139
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", [], "method"), "order", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []), "order", []), "by", []), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "content", [], "any", false, true), "order", [], "any", false, true), "dir", []), "asc")) : ("asc"))], "method");
                    // line 140
                    echo "        ";
                }
                // line 141
                echo "    ";
            } else {
                // line 142
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", [], "method");
                // line 143
                echo "    ";
            }
            // line 144
            echo "
    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 146
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 147
$context["p"], "modular", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 148
$context["p"], "routable", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 149
$context["p"], "visible", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 150
$context["p"], "published", [])) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 151
                echo "
        ";
                // line 152
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 153
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 156
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 157
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 161
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 162
                $context["page_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", []), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", []));
                // line 163
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 165
                if ($this->getAttribute($context["p"], "language", [])) {
                    // line 166
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", []) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", []), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 168
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", [])) {
                    // line 169
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 171
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 172
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", [], "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 175
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []) != "inline")) {
                    // line 176
                    echo "                        ";
                    $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "frontend_preview_target", []);
                    // line 177
                    echo "                        ";
                    $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) : ("/"));
                    // line 178
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((((("<a class=\"page-view\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 179
                    echo "                    ";
                } else {
                    // line 180
                    echo "                        ";
                    $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", [])) ? ("") : ($this->getAttribute($context["p"], "route", []))))) : ("/"));
                    // line 181
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", [])) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 182
                    echo "                    ";
                }
                // line 183
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 184
                if (($context["warn"] ?? null)) {
                    // line 185
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 187
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 189
                echo "                </span>
            </div>
            ";
                // line 191
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 192
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 193
                    echo $this->getAttribute($this, "loop", [0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)], "method");
                    echo "
                </ul>
            ";
                }
                // line 196
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1834 => 196,  1828 => 193,  1823 => 192,  1821 => 191,  1817 => 189,  1811 => 187,  1805 => 185,  1803 => 184,  1798 => 183,  1795 => 182,  1792 => 181,  1789 => 180,  1786 => 179,  1783 => 178,  1780 => 177,  1777 => 176,  1775 => 175,  1767 => 172,  1764 => 171,  1760 => 169,  1757 => 168,  1747 => 166,  1745 => 165,  1737 => 163,  1735 => 162,  1731 => 161,  1722 => 157,  1718 => 156,  1713 => 154,  1710 => 153,  1708 => 152,  1705 => 151,  1703 => 150,  1702 => 149,  1701 => 148,  1700 => 147,  1698 => 146,  1694 => 145,  1691 => 144,  1688 => 143,  1685 => 142,  1682 => 141,  1679 => 140,  1676 => 139,  1673 => 138,  1670 => 137,  1667 => 136,  1665 => 135,  1662 => 134,  1659 => 133,  1656 => 132,  1653 => 131,  1650 => 130,  1647 => 129,  1644 => 128,  1641 => 127,  1638 => 126,  1635 => 125,  1632 => 124,  1618 => 123,  1600 => 4,  1587 => 3,  1582 => 599,  1580 => 598,  1576 => 596,  1566 => 594,  1559 => 593,  1555 => 592,  1549 => 589,  1541 => 584,  1534 => 580,  1528 => 577,  1524 => 575,  1521 => 574,  1518 => 573,  1515 => 572,  1512 => 570,  1508 => 568,  1501 => 563,  1498 => 562,  1495 => 561,  1490 => 558,  1480 => 557,  1472 => 552,  1468 => 551,  1461 => 547,  1457 => 545,  1449 => 543,  1447 => 542,  1442 => 540,  1437 => 537,  1435 => 536,  1432 => 535,  1428 => 533,  1418 => 532,  1414 => 530,  1412 => 529,  1408 => 527,  1406 => 526,  1402 => 524,  1399 => 523,  1397 => 522,  1383 => 521,  1379 => 519,  1377 => 518,  1372 => 517,  1369 => 516,  1366 => 515,  1348 => 514,  1334 => 513,  1330 => 511,  1328 => 510,  1323 => 509,  1320 => 508,  1317 => 507,  1299 => 506,  1296 => 504,  1281 => 502,  1279 => 501,  1272 => 500,  1255 => 499,  1251 => 497,  1249 => 496,  1244 => 493,  1242 => 492,  1237 => 489,  1235 => 488,  1232 => 487,  1230 => 486,  1227 => 485,  1224 => 484,  1221 => 483,  1218 => 482,  1216 => 481,  1213 => 480,  1210 => 479,  1208 => 478,  1204 => 476,  1200 => 474,  1198 => 473,  1193 => 471,  1185 => 466,  1181 => 465,  1175 => 462,  1163 => 459,  1159 => 457,  1155 => 455,  1152 => 454,  1149 => 453,  1146 => 452,  1143 => 451,  1141 => 450,  1136 => 447,  1128 => 442,  1116 => 441,  1112 => 440,  1100 => 439,  1096 => 437,  1093 => 436,  1090 => 435,  1087 => 434,  1084 => 433,  1081 => 432,  1079 => 431,  1076 => 430,  1072 => 428,  1068 => 426,  1062 => 425,  1052 => 423,  1049 => 422,  1045 => 421,  1039 => 417,  1037 => 416,  1034 => 415,  1028 => 413,  1022 => 411,  1020 => 410,  1016 => 408,  1014 => 407,  1009 => 404,  1006 => 403,  1003 => 402,  1001 => 401,  998 => 400,  995 => 399,  987 => 395,  981 => 392,  978 => 391,  976 => 390,  971 => 389,  969 => 388,  966 => 387,  962 => 385,  958 => 383,  953 => 382,  949 => 379,  946 => 378,  942 => 376,  936 => 375,  926 => 373,  923 => 372,  920 => 371,  916 => 370,  910 => 366,  907 => 365,  905 => 364,  901 => 363,  898 => 362,  894 => 360,  889 => 359,  886 => 357,  883 => 356,  877 => 354,  869 => 352,  866 => 351,  860 => 349,  858 => 348,  854 => 347,  848 => 346,  845 => 345,  843 => 344,  836 => 340,  827 => 334,  823 => 332,  820 => 331,  815 => 327,  813 => 326,  802 => 324,  799 => 323,  794 => 322,  792 => 321,  786 => 319,  784 => 318,  780 => 317,  776 => 316,  767 => 310,  763 => 308,  761 => 307,  758 => 306,  754 => 304,  749 => 303,  746 => 301,  738 => 299,  735 => 298,  732 => 297,  730 => 296,  727 => 295,  719 => 293,  716 => 292,  713 => 291,  711 => 290,  708 => 289,  706 => 288,  698 => 286,  694 => 284,  689 => 283,  684 => 280,  681 => 279,  678 => 278,  674 => 276,  669 => 275,  666 => 273,  662 => 271,  658 => 269,  652 => 268,  644 => 266,  641 => 265,  638 => 264,  634 => 263,  628 => 259,  626 => 258,  620 => 256,  618 => 255,  613 => 252,  610 => 251,  606 => 249,  601 => 248,  596 => 244,  594 => 243,  583 => 241,  580 => 240,  575 => 239,  573 => 238,  567 => 237,  555 => 235,  552 => 234,  547 => 233,  541 => 231,  539 => 230,  535 => 229,  531 => 228,  522 => 222,  518 => 220,  514 => 218,  509 => 217,  506 => 215,  500 => 214,  488 => 212,  485 => 211,  481 => 210,  473 => 208,  469 => 206,  464 => 205,  462 => 204,  460 => 203,  457 => 202,  454 => 201,  450 => 111,  436 => 110,  433 => 109,  430 => 108,  427 => 107,  424 => 106,  421 => 105,  418 => 104,  410 => 102,  407 => 101,  389 => 100,  387 => 99,  385 => 98,  371 => 97,  368 => 96,  365 => 95,  362 => 94,  359 => 93,  356 => 92,  353 => 91,  345 => 89,  342 => 88,  324 => 87,  319 => 85,  317 => 84,  303 => 83,  300 => 82,  297 => 81,  294 => 80,  291 => 79,  288 => 78,  285 => 77,  277 => 75,  274 => 74,  256 => 73,  254 => 72,  252 => 71,  238 => 70,  235 => 69,  232 => 68,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  212 => 62,  209 => 61,  191 => 60,  188 => 59,  186 => 58,  183 => 57,  179 => 54,  173 => 53,  170 => 52,  165 => 51,  159 => 50,  156 => 49,  151 => 48,  146 => 46,  144 => 45,  138 => 44,  135 => 43,  130 => 42,  124 => 41,  121 => 40,  116 => 39,  113 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  99 => 33,  94 => 1,  91 => 120,  89 => 119,  86 => 117,  84 => 116,  82 => 115,  80 => 114,  78 => 31,  76 => 30,  74 => 29,  72 => 28,  70 => 27,  67 => 24,  65 => 23,  61 => 20,  58 => 18,  56 => 17,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  44 => 11,  41 => 8,  39 => 7,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {#tt#}
    {% set theScope = mode == 'edit' ? 'page' : 'pages' %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'first') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'before:parent') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {#tt end#}
    {{ parent() }}
    {#tt#}
    {% for sheet in service_items('admin:stylesheets', theScope, 'after:parent') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'last') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {#tt end#}
{% endblock %}

{% block javascripts %}
    {#tt#}
    {% set theScope = mode == 'edit' ? 'page' : 'pages' %}
    {% for asset in service_list('asset', theScope, 'first') %}
        {% if asset.type == 'link' %}
            <link rel=\"{{ asset.rel }}\" href=\"{{ asset.url }}\" />
        {% endif %}
        {% if asset.type == 'twig' %}
            {% include \"#{asset.url}\" %}
        {% endif %}
        {% if asset.type == 'javascript' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
    {#tt#}
    {% for asset in service_list('asset', theScope, 'before:parent') %}
        {% if asset.type == 'link' %}
            <link rel=\"{{ asset.rel }}\" href=\"{{ asset.url }}\" />
        {% endif %}
        {% if asset.type == 'twig' %}
            {% include \"#{asset.url}\" %}
        {% endif %}
        {% if asset.type == 'javascript' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', theScope, 'after:parent') %}
        {% if asset.type == 'link' %}
            <link rel=\"{{ asset.rel }}\" href=\"{{ asset.url }}\" />
        {% endif %}
        {% if asset.type == 'twig' %}
            {% include \"#{asset.url}\" %}
        {% endif %}
        {% if asset.type == 'javascript' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
    {#tt#}
    {% for asset in service_list('asset', theScope, 'last') %}
        {% if asset.type == 'link' %}
            <link rel=\"{{ asset.rel }}\" href=\"{{ asset.url }}\" />
        {% endif %}
        {% if asset.type == 'twig' %}
            {% include \"#{asset.url}\" %}
        {% endif %}
        {% if asset.type == 'javascript' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
{% endblock %}

{% if config.plugins.admin.frontend_preview_target != 'inline' %}
{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_target = config.plugins.admin.frontend_preview_target %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% else %}
    {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_link = context.routable ? '<a class=\"button\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% endif %}

{% macro loop(page, depth, twig_vars) %}
    {% set config = twig_vars['config'] %}
    {% set separator = config.system.param_sep %}
    {% set display_field = config.plugins.admin.pages_list_display_field %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_relative_frontend = twig_vars['base_url_relative_frontend'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% if page.header.content.order.custom %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc'), page.header.content.order.custom) %}
        {% else %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {% endif %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
                             (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
                             (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
                             (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
                             (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                            {% set page_label = attribute(p.header, display_field)|defined(attribute(p, display_field))|defined(p.title) %}
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ page_label|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if config.plugins.admin.frontend_preview_target != 'inline' %}
                        {% set preview_target = config.plugins.admin.frontend_preview_target %}
                        {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% else %}
                        {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% endif %}
                    {{ preview_link|raw }}
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ _self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            {#tt#}
            {{ service_render('renderer', 'pages', 'first', context) | raw }}
            {{ service_render('action', 'pages', 'first', context) | raw }}
            {#tt end#}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
                {% endif %}
            {% endfor %}

            {#tt#}
            {{ service_render('renderer', 'pages', 'before:parent', context) | raw }}
            {{ service_render('action', 'pages', 'before:parent', context) | raw }}
            {#tt end#}
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
                        {% endif %}
                    {% endfor %}
                    {#tt#}
                    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=pages))\", context) %}
                        {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                        <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                    {% endfor %}
                    {#tt end#}
                </ul>
            </div>

            {#tt#}
            {{ service_render('renderer', 'pages', 'after:parent', context) | raw }}
            {{ service_render('action', 'pages', 'after:parent', context) | raw }}
            {#tt end#}
            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'pages', 'last', context) | raw }}
            {{ service_render('action', 'pages', 'last', context) | raw }}
            {#tt end#}
        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            {#tt#}
            {{ service_render('renderer', 'page', 'first', context) | raw }}
            {{ service_render('action', 'page', 'first', context) | raw }}
            {#tt end#}
            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}

            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'page', 'before:parent', context) | raw }}
            {{ service_render('action', 'page', 'before:parent', context) | raw }}
            {#tt end#}
            
            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                        {#tt#}
                        {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=page))\", context) %}
                            {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                            <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                        {% endfor %}
                        {#tt end#}
                    </ul>
                </div>

                {#tt#}
                {% if service_render_count('action', 'page:more', 'any', context) > 0 %}
                    <div class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\" href=\"#\">
                            <i class=\"fa fa-plus-square\"></i> {{ \"More\" }}
                        </button>
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\">
                            {{ service_render('action', 'page:more', 'any', context) | raw }}
                        </ul>
                    </div>
                {% endif %}
                {#tt end#}

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'page', 'after:parent', context) | raw }}
            {{ service_render('action', 'page', 'after:parent', context) | raw }}
            {#tt end#}
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>

            {#tt#}
            {{ service_render('renderer', 'page', 'last', context) | raw }}
            {{ service_render('action', 'page', 'last', context) | raw }}
            {#tt end#}

        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.menu }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = _self.spanToggle(normalText, maxLen) %}
                {% set expertText = _self.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ _self.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id:'new-page' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id:'new-folder' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id:'new-modular' } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context, form_id:'add-modal' }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
        
    {#tt#}
    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=#{ mode=='list' ? 'pages' : 'page' }))\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {% for item in service_list(\"action\", mode == 'list' ? \"pages\" : [\"page\", \"page:more\"], \"any\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {#tt end#}
    {% endif %}


    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] ignore missing with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
<script>
    {{ parent() }}
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>

{#tt - remove this when the admin plugin is fixed#}
{{ assets.js('bottom') | raw }}
{#tt end#}
    
    {#tt#}
    {% set like_data = grav.session.getFlashObject(\"like_data\") %}
    {% set like_page = grav.session.getFlashObject(\"like_page\") %}
    {% if like_page %}
    <script>
        let title2 = \$('input[name=\"data[header][title]\"]');
        title2.val('{{ grav.session.getFlashObject('use_title')  }}');
    
        let content2 = \$('textarea[name=\"data[content]\"]');
        content2.val({{ grav.session.getFlashObject('use_content') | json_encode | raw }});

        {
            let c = \$('input[name=\"data[header][body_classes]\"]');
            c.val('{{ like_page.header.body_classes }}');
        }

        {
            let c = \$('select[name=\"data[name]\"]');
            c.val('{{ like_page.template }}');
        }

        {% for name, items in grav.session.getFlashObject('use_taxonomy')  %}
            let tax{{ name }} = \$('select[name=\"data[header][taxonomy][{{ name }}][]\"]');
            tax{{ name }}.val({{ items | json_encode | raw }});
        {% endfor %}
    </script>
    {% endif %}
    {#tt end#}
    
{% endblock %}
", "pages.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\core-service-manager\\templates\\grav-1.6\\admin-1.10\\pages.html.twig");
    }
}
