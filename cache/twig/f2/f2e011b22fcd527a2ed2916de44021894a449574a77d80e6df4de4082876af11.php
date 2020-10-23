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

/* flex-directory.html.twig */
class __TwigTemplate_09d66eb0236c4d970084b3c40542c0695fccb96ec42b6b56cd589fe28af2e001 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $context["base_route"] = ($context["location"] ?? null);
        // line 4
        $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 6
        $context["tabs"] = [0 => "Directory"];
        // line 15
        $context["action"] = ((($context["action"] ?? null)) ? (($context["action"] ?? null)) : ("edit"));
        // line 17
        $context["template"] = (((($context["action"] ?? null) == "add")) ? ("edit") : ((((($context["action"] ?? null) == "delete")) ? ("list") : (($context["action"] ?? null)))));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-directory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if ((null === ($context["target"] ?? null))) {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->redirectFunc((($context["base_url"] ?? null) . "/flex-directory/entries")), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_titlebar($context, array $blocks = [])
    {
        // line 20
        echo "    <div class=\"button-bar\">
        ";
        // line 21
        if ((($context["action"] ?? null) == "list")) {
            // line 22
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <a class=\"button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, (((($context["base_url"] ?? null) . "/flex-directory/") . ($context["target"] ?? null)) . "/action:add"), "html", null, true);
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 25
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/flex-directory/") . ($context["target"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 28
        echo "
    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_DIRECTORY.TITLE"), "html", null, true);
        echo "</h1>
";
    }

    // line 33
    public function block_content_top($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"alert notice\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>user/data/";
        echo twig_escape_filter($this->env, ($context["base_route"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
        echo ".json</b></div>
";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "    <div id=\"directory\">
    ";
        // line 39
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate((((("partials/" . ($context["target"] ?? null)) . "-") . ($context["template"] ?? null)) . ".html.twig"), "flex-directory.html.twig", 39);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 40
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "flex-directory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  136 => 39,  133 => 38,  130 => 37,  119 => 34,  116 => 33,  110 => 30,  106 => 28,  101 => 26,  94 => 25,  87 => 23,  80 => 22,  78 => 21,  75 => 20,  72 => 19,  65 => 12,  59 => 10,  56 => 9,  53 => 8,  48 => 1,  46 => 17,  44 => 15,  42 => 6,  40 => 4,  38 => 3,  32 => 1,);
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

{% set base_route = location %}
{% set separator = config.system.param_sep %}

{% set tabs = ['Directory'] %}

{% block head %}
    {% if target is null %}
    {{ redirect_me(base_url ~ '/flex-directory/entries') }}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% set action = action ?: 'edit' %}

{% set template = (action == 'add') ? 'edit' : (action == 'delete') ? 'list' : action %}

{% block titlebar %}
    <div class=\"button-bar\">
        {% if action == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <a class=\"button\" href=\"{{ base_url ~ '/flex-directory/' ~ target ~ '/action:add' }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ base_url ~ '/flex-directory/' ~ target }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        {% endif %}

    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_FLEX_DIRECTORY.TITLE\"|tu }}</h1>
{% endblock %}

{% block content_top %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>user/data/{{ base_route }}/{{ target }}.json</b></div>
{% endblock %}

{% block content %}
    <div id=\"directory\">
    {% include \"partials/\"~target~\"-\"~template~\".html.twig\" ignore missing %}
    </div>
{% endblock %}
", "flex-directory.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-directory\\admin\\templates\\flex-directory.html.twig");
    }
}
