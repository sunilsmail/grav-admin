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

/* dashboard.html.twig */
class __TwigTemplate_1a182b2f9546be52de23f7a2c6c8048bb1ca5c0814bfe3474eb2edf80b6211a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'widgets' => [$this, 'block_widgets'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", "dashboard", "any"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 12
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "css")) {
                // line 13
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 14
                echo "        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", "dashboard", "any"));
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
            // line 23
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "link")) {
                // line 24
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", []), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "twig")) {
                // line 27
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", []), "dashboard.html.twig", 27)->display($context);
                // line 28
                echo "        ";
            }
            // line 29
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", []) == "javascript")) {
                // line 30
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => $this->getAttribute($context["asset"], "url", [])], "method");
                // line 31
                echo "        ";
            }
            // line 32
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
        // line 33
        echo "    ";
    }

    // line 37
    public function block_titlebar($context, array $blocks = [])
    {
        // line 38
        echo "    <div class=\"button-bar\">
        ";
        // line 40
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "first", ($context["context"] ?? null));
        echo "
        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "before:parent", ($context["context"] ?? null));
        echo "
        ";
        // line 45
        echo "
        ";
        // line 47
        echo "        ";
        $context["pageadd_items"] = $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=dashboard))", ($context["context"] ?? null));
        // line 48
        echo "        ";
        if ((count(($context["pageadd_items"] ?? null)) > 0)) {
            // line 49
            echo "        <div class=\"button-group\">
            ";
            // line 51
            echo "                ";
            // line 52
            echo "            ";
            // line 53
            echo "            <button type=\"button\" class=\"button disabled\" href=\"#\">
                <i class=\"fa fa-plus\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
            </button>
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageadd_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "                    ";
                $context["key"] = (($this->getAttribute($context["item"], "form_id", [])) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", [])) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", []))) : (""));
                // line 62
                echo "                    <li><a class=\"button\" ";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", []), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </ul>
        </div>
        ";
        }
        // line 67
        echo "        ";
        // line 68
        echo "        
        ";
        // line 69
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super", 2 => "admin.cache"])) {
            // line 70
            echo "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ($context["clear_cache_url"] ?? null), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "all"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "tmp-only"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "after:parent");
        echo "
        ";
        // line 87
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
            // line 88
            echo "            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            echo "</button>
        ";
        }
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "last");
        echo "
        ";
        // line 93
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        echo "</h1>
";
    }

    // line 97
    public function block_widgets($context, array $blocks = [])
    {
        // line 98
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "dashboard", [])) {
            // line 99
            echo "    <div class=\"dashboard-notifications-container\"></div>
    ";
        }
        // line 101
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 103
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_top", [])) {
            // line 104
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_top", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 105
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 106
                    echo "                    <div class=\"dashboard-item-flex\">
                        ";
                    // line 107
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 107)->display($context);
                    // line 108
                    echo "                    </div>
                ";
                }
                // line 110
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        ";
        }
        // line 112
        echo "    </div>
";
    }

    // line 115
    public function block_content($context, array $blocks = [])
    {
        // line 116
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_main", [])) {
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_main", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 118
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 119
                    echo "                ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 119)->display($context);
                    // line 120
                    echo "            ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=dashboard))", ($context["context"] ?? null)));
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
            // line 126
            echo "        ";
            if ($this->getAttribute($context["item"], "form_id", [])) {
                // line 127
                echo "            ";
                $context["form_data"] = $this->getAttribute($context["item"], "form_data", [0 => ($context["context"] ?? null)], "method");
                // line 128
                echo "            <div class=\"remodal\" data-remodal-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", []), "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                // line 129
                $this->loadTemplate("partials/blueprints-new-custom.html.twig", "dashboard.html.twig", 129)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute($context["item"], "form_blueprint", []), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", [])]));
                // line 130
                echo "            </div>
        ";
            }
            // line 132
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
        // line 133
        echo "    ";
        // line 134
        echo "    
";
    }

    // line 137
    public function block_content_bottom($context, array $blocks = [])
    {
        // line 138
        echo "    <div id=\"admin-dashboard\">";
        // line 139
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_bottom", [])) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_bottom", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 141
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), $this->getAttribute($context["widget"], "template", [])) == true)) {
                    // line 142
                    echo "                    ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", [])) . ".html.twig"), "dashboard.html.twig", 142)->display($context);
                    // line 143
                    echo "                ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 146
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 146,  504 => 143,  501 => 142,  499 => 141,  482 => 140,  480 => 139,  478 => 138,  475 => 137,  470 => 134,  468 => 133,  454 => 132,  450 => 130,  448 => 129,  443 => 128,  440 => 127,  437 => 126,  419 => 125,  403 => 120,  400 => 119,  398 => 118,  381 => 117,  379 => 116,  376 => 115,  371 => 112,  368 => 111,  354 => 110,  350 => 108,  348 => 107,  345 => 106,  342 => 105,  324 => 104,  322 => 103,  318 => 101,  314 => 99,  311 => 98,  308 => 97,  302 => 94,  299 => 93,  294 => 91,  292 => 90,  286 => 88,  283 => 87,  278 => 85,  276 => 84,  267 => 80,  261 => 79,  255 => 78,  249 => 77,  243 => 76,  233 => 71,  230 => 70,  228 => 69,  225 => 68,  223 => 67,  218 => 64,  207 => 62,  204 => 61,  200 => 60,  191 => 54,  188 => 53,  186 => 52,  184 => 51,  181 => 49,  178 => 48,  175 => 47,  172 => 45,  167 => 43,  165 => 42,  160 => 40,  157 => 38,  154 => 37,  150 => 33,  136 => 32,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  110 => 24,  107 => 23,  89 => 22,  84 => 20,  81 => 19,  77 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  57 => 11,  52 => 9,  49 => 8,  44 => 1,  42 => 5,  40 => 3,  34 => 1,);
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

{% set title = \"PLUGIN_ADMIN.DASHBOARD\"|tu %}

{% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}


{% block stylesheets %}
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', 'dashboard', 'any') %}
        {% if asset.type == 'css' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', 'dashboard', 'any') %}
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


{% block titlebar %}
    <div class=\"button-bar\">
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'first', context) | raw }}
        {#tt end#}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'before:parent', context) | raw }}
        {#tt end#}

        {#tt#}
        {% set pageadd_items = service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=dashboard))\", context) %}
        {% if pageadd_items|count > 0 %}
        <div class=\"button-group\">
            {#<button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">#}
                {#<i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}#}
            {#</button>#}
            <button type=\"button\" class=\"button disabled\" href=\"#\">
                <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
            </button>
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                {% for item in pageadd_items %}
                    {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                    <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        {#tt end#}
        
        {% if authorize(['admin.maintenance', 'admin.super', 'admin.cache']) %}
            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}\" class=\"button\"><i class=\"fa fa-trash\"></i> {{ \"PLUGIN_ADMIN.CLEAR_CACHE\"|tu }}</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"{{  uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'tmp-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY\"|tu }}</a></li>
                </ul>
            </div>
        {% endif %}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'after:parent') | raw }}
        {#tt end#}
        {% if authorize(['admin.maintenance', 'admin.super']) %}
            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|tu }}</button>
        {% endif %}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'last') | raw }}
        {#tt end#}
    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> {{ \"PLUGIN_ADMIN.DASHBOARD\"|tu }}</h1>
{% endblock %}

{% block widgets %}
    {% if config.plugins.admin.notifications.dashboard %}
    <div class=\"dashboard-notifications-container\"></div>
    {% endif %}

    <div id=\"admin-dashboard\">
        {% if grav.twig.plugins_hooked_dashboard_widgets_top %}
            {% for widget in grav.twig.plugins_hooked_dashboard_widgets_top %}
                {% if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    <div class=\"dashboard-item-flex\">
                        {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}

{% block content %}
    {%- if grav.twig.plugins_hooked_dashboard_widgets_main -%}
        {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_main -%}
            {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                {% include 'partials/' ~ widget.template ~ '.html.twig' %}
            {% endif -%}
        {%- endfor -%}
    {%- endif -%}

    {#tt#}
    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=dashboard))\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {#tt end#}
    
{% endblock %}

{% block content_bottom %}
    <div id=\"admin-dashboard\">
        {%- if grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
            {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
                {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                {% endif -%}
            {%- endfor -%}
        {%- endif -%}
    </div>
{% endblock %}
", "dashboard.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\core-service-manager\\templates\\grav-1.6\\admin-1.10\\dashboard.html.twig");
    }
}
