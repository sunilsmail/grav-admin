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

/* partials/blog/taxonomy.html.twig */
class __TwigTemplate_cb29fad0527b46496ef7ce78cfede3528760447a43572d5c48b54f1e63d14ec7 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 2
            echo "<span class=\"tags\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "    <a class=\"label label-rounded ";
                echo ((($context["label_style"] ?? null)) ? (($context["label_style"] ?? null)) : ("label-secondary"));
                echo " p-category\" href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "#body-wrapper\">";
                echo $context["tag"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.taxonomy.tag %}
<span class=\"tags\">
    {% for tag in page.taxonomy.tag %}
    <a class=\"label label-rounded {{ label_style ?: 'label-secondary' }} p-category\" href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}#body-wrapper\">{{ tag }}</a>
    {% endfor %}
</span>
{% endif %}
", "partials/blog/taxonomy.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\quark\\templates\\partials\\blog\\taxonomy.html.twig");
    }
}
