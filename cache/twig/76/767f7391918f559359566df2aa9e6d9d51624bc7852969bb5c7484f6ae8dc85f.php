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

/* flex-objects/pages/types.html.twig */
class __TwigTemplate_19083f09e651079abcc2fbc5ebe2d09135bfc9f04896e5031c9405c2cd5b0d7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("flex-objects/pages/titlebar/types.html.twig", "flex-objects/pages/types.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/pages/titlebar/types.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
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
        $context["directory_url"] = ((($context["base_url_relative"] ?? null) . "/") . ($context["location"] ?? null));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/pages/types.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        if (($this->getAttribute(($context["flex"] ?? null), "count", []) == 1)) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->redirectFunc(((($context["base_url"] ?? null) . "/flex-objects/") . $this->getAttribute($this->getAttribute(($context["flex"] ?? null), "directory", []), "type", []))), "html", null, true);
            echo "
    ";
        }
        // line 11
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "
    <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.TYPES_TITLE"), "html", null, true);
        echo "</h1>

    <div id=\"types\" class=\"card-row grid fixed-blocks pure-g\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["flex"] ?? null), "directories", []));
        foreach ($context['_seq'] as $context["type"] => $context["directory"]) {
            // line 20
            echo "            <div class=\"card-item pure-u-1-3\">

                <h2><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ((($context["directory_url"] ?? null) . "/") . $context["type"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["directory"], "title", [])), "html", null, true);
            echo "</a> <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["directory"], "collection", []), "count", []), "html", null, true);
            echo "</span></h2>
                <p>
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["directory"], "description", []), "html", null, true);
            echo "
                </p>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "flex-objects/pages/types.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  105 => 24,  96 => 22,  92 => 20,  88 => 19,  82 => 16,  79 => 15,  76 => 14,  69 => 11,  63 => 9,  60 => 8,  57 => 7,  52 => 1,  50 => 5,  48 => 4,  42 => 1,  23 => 2,);
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
{% use 'flex-objects/pages/titlebar/types.html.twig' %}

{% set flex = grav.flex_objects %}
{% set directory_url =  base_url_relative ~ '/' ~ location %}

{% block head %}
    {% if flex.count == 1 %}
        {{ redirect_me(base_url ~ '/flex-objects/' ~ flex.directory.type) }}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block content %}

    <h1>{{ 'PLUGIN_FLEX_OBJECTS.TYPES_TITLE'|tu }}</h1>

    <div id=\"types\" class=\"card-row grid fixed-blocks pure-g\">
        {% for type,directory in flex.directories %}
            <div class=\"card-item pure-u-1-3\">

                <h2><a href=\"{{ directory_url ~ '/' ~ type }}\">{{ directory.title|tu }}</a> <span class=\"badge\">{{ directory.collection.count }}</span></h2>
                <p>
                    {{ directory.description }}
                </p>
            </div>

        {% endfor %}

    </div>

{% endblock %}", "flex-objects/pages/types.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\pages\\types.html.twig");
    }
}
