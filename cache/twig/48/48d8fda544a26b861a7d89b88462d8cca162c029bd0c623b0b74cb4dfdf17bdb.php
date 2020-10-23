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

/* flex-objects/pages/list.html.twig */
class __TwigTemplate_ba4fe870a651dd5e0c7771d22c316220431dcfef7032b1eabd8d989ec47f4205 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("flex-objects/pages/titlebar/list.html.twig", "flex-objects/pages/list.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/pages/titlebar/list.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'content_top' => [$this, 'block_content_top'],
                'content' => [$this, 'block_content'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["flex"] = $this->getAttribute(($context["grav"] ?? null), "flex_objects", []);
        // line 5
        $context["directory"] = $this->getAttribute(($context["flex"] ?? null), "directory", [0 => ($context["target"] ?? null)], "method");
        // line 6
        $context["collection"] = $this->getAttribute(($context["directory"] ?? null), "collection", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/pages/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content_top($context, array $blocks = [])
    {
        // line 9
        echo "    <div class=\"alert notice\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>.";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["directory"] ?? null), "storageFolder", [], "method")), "html", null, true);
        echo "</b></div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "<div id=\"directory\">
    ";
        // line 14
        $context["path"] = (($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.list.template"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.list.template"], "method"), (("flex-objects/types/" . ($context["target"] ?? null)) . "/list.html.twig"))) : ((("flex-objects/types/" . ($context["target"] ?? null)) . "/list.html.twig")));
        // line 15
        echo "    ";
        $this->loadTemplate([0 => ($context["path"] ?? null), 1 => "flex-objects/types/default/list.html.twig"], "flex-objects/pages/list.html.twig", 15)->display($context);
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/pages/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  79 => 15,  77 => 14,  74 => 13,  71 => 12,  62 => 9,  59 => 8,  54 => 1,  52 => 6,  50 => 5,  48 => 4,  42 => 1,  23 => 2,);
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
{% use 'flex-objects/pages/titlebar/list.html.twig' %}

{% set flex = grav.flex_objects %}
{% set directory = flex.directory(target) %}
{% set collection = directory.collection %}

{% block content_top %}
    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>.{{ url(directory.storageFolder()) }}</b></div>
{% endblock %}

{% block content %}
<div id=\"directory\">
    {% set path = directory.config('admin.list.template')|default('flex-objects/types/' ~ target ~ '/list.html.twig') %}
    {% include [path, 'flex-objects/types/default/list.html.twig'] %}
</div>
{% endblock %}", "flex-objects/pages/list.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\pages\\list.html.twig");
    }
}
