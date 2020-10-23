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

/* flex-objects.html.twig */
class __TwigTemplate_1718aea1a42bdc5ad9faa2717f86327159ec097d9e28e5650cee0f48914f7f33 extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate((("flex-objects/pages/" . ($context["template"] ?? null)) . ".html.twig"), "flex-objects.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["template"] = (((($context["action"] ?? null) == "add")) ? ("edit") : ((((($context["action"] ?? null) == "delete")) ? ("list") : (((($context["action"] ?? null)) ? (($context["action"] ?? null)) : ("types"))))));
        // line 4
        $context["base_route"] = ($context["location"] ?? null);
        // line 5
        $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 5,  28 => 4,  26 => 1,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set template = (action == 'add') ? 'edit' : (action == 'delete') ? 'list' : action ?: 'types' %}
{% extends 'flex-objects/pages/' ~ template ~ '.html.twig' %}

{% set base_route = location %}
{% set separator = config.system.param_sep %}
", "flex-objects.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects.html.twig");
    }
}
