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

/* config.html.twig */
class __TwigTemplate_44cb02d0a3f09bcc3562ae502e0fe888e0359dbdbbece0eec63290ed36eccc37 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
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
        $context["config_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", []));
        // line 4
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 6
        $context["tab_title_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)));
        // line 7
        $context["tab_title"] = ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null)) == ($context["tab_title_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, ($context["config_slug"] ?? null))) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["tab_title_string"] ?? null))));
        // line 8
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . ($context["tab_title"] ?? null));
        // line 10
        if ( !($context["isInfo"] ?? null)) {
            // line 11
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . ($context["config_slug"] ?? null))], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_titlebar($context, array $blocks = [])
    {
        // line 24
        echo "    <div class=\"button-bar\">
        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "configuration", "first");
        echo "
        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "configuration", "before:parent");
        echo "
        ";
        // line 31
        echo "        <a class=\"button\" href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 33
            echo "        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 35
        echo "        ";
        // line 36
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "configuration", "after:parent");
        echo "
        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "configuration", "last");
        echo "
        ";
        // line 41
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["tab_title"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    // line 45
    public function block_content_top($context, array $blocks = [])
    {
        // line 46
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", [])) {
            // line 47
            echo "    <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", []), "filename", []), [($context["base_path"] ?? null) => ""]), "html", null, true);
            echo "</b></div>
    ";
        }
        // line 49
        echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 53
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_system", 1 => "admin.super"])) {
            // line 54
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/system\">
                <span>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 58
        echo "
            ";
        // line 59
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_site", 1 => "admin.super"])) {
            // line 60
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/site\">
                <span>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 64
        echo "
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", []));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 66
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"])) {
                // line 67
                echo "                    ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => ("config/" . $context["configuration"])], "method"), "blueprints", []), "toArray", [], "method");
                // line 68
                echo "                    ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "hidden", [])) && ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "fields", [])) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", []), "field", []))))) {
                    // line 69
                    echo "                        <a ";
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/config/";
                    echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                    echo "\">
                            ";
                    // line 70
                    $context["configuration_string"] = ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $context["configuration"]));
                    // line 71
                    echo "                            <span>";
                    echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)) == ($context["configuration_string"] ?? null))) ? (twig_capitalize_string_filter($this->env, $context["configuration"])) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["configuration_string"] ?? null)))), "html", null, true);
                    echo "</span>
                        </a>
                    ";
                }
                // line 74
                echo "                ";
            }
            // line 75
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
            ";
        // line 77
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.configuration_info", 1 => "admin.super"])) {
            // line 78
            echo "            <a ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/config/info\">
                <span>";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 82
        echo "
        </div>
    </div>
";
    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        // line 88
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 1 => "admin.super"])) {
            // line 89
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 90
                echo "            <div id=\"phpinfo\">
                ";
                // line 91
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", []);
                echo "
            </div>
        ";
            } else {
                // line 94
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 94)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
                // line 95
                echo "        ";
            }
            // line 96
            echo "    ";
        }
        // line 97
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 97)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 97,  293 => 96,  290 => 95,  287 => 94,  281 => 91,  278 => 90,  275 => 89,  272 => 88,  269 => 87,  262 => 82,  256 => 79,  247 => 78,  245 => 77,  242 => 76,  236 => 75,  233 => 74,  226 => 71,  224 => 70,  213 => 69,  210 => 68,  207 => 67,  204 => 66,  200 => 65,  197 => 64,  191 => 61,  182 => 60,  180 => 59,  177 => 58,  171 => 55,  162 => 54,  160 => 53,  154 => 49,  146 => 47,  143 => 46,  140 => 45,  132 => 42,  129 => 41,  124 => 39,  122 => 38,  117 => 36,  115 => 35,  109 => 33,  107 => 32,  100 => 31,  95 => 29,  93 => 28,  88 => 26,  85 => 24,  82 => 23,  75 => 20,  72 => 19,  65 => 16,  62 => 15,  59 => 14,  54 => 1,  51 => 11,  49 => 10,  47 => 8,  45 => 7,  43 => 6,  41 => 4,  39 => 3,  33 => 1,);
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

{% set config_slug = uri.basename|e %}
{% set isInfo = (config_slug == 'info') %}

{% set tab_title_string = \"PLUGIN_ADMIN.\" ~ config_slug|upper %}
{% set tab_title = (tab_title_string|tu == tab_title_string ? config_slug|capitalize : tab_title_string|tu)  %}
{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ tab_title %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        {#tt#}
        {{ service_render(\"renderer\", \"configuration\", \"first\") | raw }}
        {#tt end#}
        {#tt#}
        {{ service_render(\"renderer\", \"configuration\", \"before:parent\") | raw }}
        {#tt end#}
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        {% if data.file.filename %}
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}
        {#tt#}
        {{ service_render(\"renderer\", \"configuration\", \"after:parent\") | raw }}
        {#tt end#}
        {#tt#}
        {{ service_render(\"renderer\", \"configuration\", \"last\") | raw }}
        {#tt end#}
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ tab_title }}</h1>
{% endblock %}

{% block content_top %}
    {% if data.file.filename %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    {% endif %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            {% if authorize(['admin.configuration_system', 'admin.super']) %}
            <a {% if config_slug == 'system' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/system\">
                <span>{{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}</span>
            </a>
            {% endif %}

            {% if authorize(['admin.configuration_site', 'admin.super']) %}
            <a {% if config_slug == 'site' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/site\">
                <span>{{ \"PLUGIN_ADMIN.SITE\"|tu }}</span>
            </a>
            {% endif %}

            {% for configuration in admin.configurations %}
                {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}
                    {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                    {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and (current_blueprints.form.fields is not empty or current_blueprints.form.field is not empty) %}
                        <a {% if config_slug == configuration %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/{{configuration}}\">
                            {% set configuration_string = \"PLUGIN_ADMIN.\" ~ configuration|upper %}
                            <span>{{ (configuration_string|tu == configuration_string ? configuration|capitalize : configuration_string|tu) }}</span>
                        </a>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if authorize(['admin.configuration_info', 'admin.super']) %}
            <a {% if config_slug == 'info' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/info\">
                <span>{{ \"PLUGIN_ADMIN.INFO\"|tu }}</span>
            </a>
            {% endif %}

        </div>
    </div>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
{% endblock %}
", "config.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\core-service-manager\\templates\\grav-1.6\\admin-1.10\\config.html.twig");
    }
}
