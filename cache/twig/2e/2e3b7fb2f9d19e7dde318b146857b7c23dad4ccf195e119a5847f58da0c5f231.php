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

/* default.json.twig */
class __TwigTemplate_7a27fba34301f7a77d85afa4bf1ced08a523f4221324474d91bf3ecbb0773c4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["payload"] = ["frontmatter" => $this->getAttribute(($context["page"] ?? null), "header", []), "content" => $this->getAttribute(($context["page"] ?? null), "content", [])];
        // line 2
        echo twig_jsonencode_filter(($context["payload"] ?? null));
    }

    public function getTemplateName()
    {
        return "default.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set payload = {frontmatter: page.header, content: page.content}  %}
{{ payload|json_encode|raw }}", "default.json.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\quark\\templates\\default.json.twig");
    }
}
