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

/* flex-objects/pages/titlebar/list.html.twig */
class __TwigTemplate_0fca6874d866b94066d2178c2f7b7cc8f93563f736f359525d0a9f631fe720e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('titlebar', $context, $blocks);
    }

    public function block_titlebar($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        $context["flex_root_url"] = ((($this->getAttribute(($context["flex"] ?? null), "count", []) > 1)) ? ((($context["base_url"] ?? null) . "/flex-objects")) : (($context["base_url"] ?? null)));
        // line 3
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["flex_root_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <a class=\"button\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (((($context["base_url"] ?? null) . "/flex-objects/") . ($context["target"] ?? null)) . "/action:add"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        echo "</a>
    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.TITLE"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/pages/titlebar/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  49 => 5,  43 => 4,  40 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block titlebar %}
    {% set flex_root_url = flex.count > 1 ? base_url ~ '/flex-objects' : base_url %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ flex_root_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        <a class=\"button\" href=\"{{ base_url ~ '/flex-objects/' ~ target ~ '/action:add' }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
    </div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_FLEX_OBJECTS.TITLE\"|tu }}</h1>
{% endblock %}
", "flex-objects/pages/titlebar/list.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\pages\\titlebar\\list.html.twig");
    }
}
