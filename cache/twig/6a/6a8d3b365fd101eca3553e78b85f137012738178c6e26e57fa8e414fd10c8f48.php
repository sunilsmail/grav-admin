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

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_f9a4d690f7ded0840480102c3a0b4fdab3e3009d2f8c9065d11f26ad19047d4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'actions' => [$this, 'block_actions'],
            'group' => [$this, 'block_group'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/fieldset/fieldset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"form-fieldset";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        }
        echo "\">
    ";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 98
        echo "  </div>
";
    }

    // line 5
    public function block_contents($context, array $blocks = [])
    {
        // line 6
        echo "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"";
        if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", []) ||  !$this->getAttribute(($context["field"] ?? null), "collapsed", []))) {
            echo " checked=\"checked\"";
        }
        echo " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            echo " for=\"fieldset_collapsible_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\" class=\"form-fieldset--cursor\"";
        }
        echo ">
            ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 12
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 25
            echo "          </span>
          ";
        }
        // line 27
        echo "
          ";
        // line 29
        echo "          <span class=\"actions\">
            ";
        // line 30
        $this->displayBlock('actions', $context, $blocks);
        // line 38
        echo "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        echo "      >

          ";
        // line 50
        $this->displayBlock('group', $context, $blocks);
        // line 96
        echo "      </div>
    ";
    }

    // line 14
    public function block_label($context, array $blocks = [])
    {
        // line 15
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "icon", [])) {
            // line 16
            echo "                <i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>
              ";
        }
        // line 18
        echo "              ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
        echo "
              ";
        // line 19
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
              ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "info", [])) {
            // line 21
            echo "                <span class=\"form-fieldset--info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "info", [])), "html", null, true);
            echo "</span>
              ";
        }
        // line 23
        echo "            ";
    }

    // line 30
    public function block_actions($context, array $blocks = [])
    {
        // line 31
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            // line 32
            echo "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        echo "            ";
    }

    // line 50
    public function block_group($context, array $blocks = [])
    {
        // line 51
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
            // line 52
            echo "                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                // line 53
                echo "                    ";
                (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? (print ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", []))))) : (print (twig_escape_filter($this->env, (("<p>" . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", []))) . "</p>"), "html", null, true))));
                echo "
                ";
            } else {
                // line 55
                echo "                    ";
                (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? (print ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", []))))) : (print (twig_escape_filter($this->env, (("<p>" . $this->getAttribute(($context["field"] ?? null), "t", [])) . "</p>"), "html", null, true))));
                echo "
                ";
            }
            // line 57
            echo "              ";
        }
        // line 58
        echo "
              ";
        // line 59
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 60
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 61
                if (($context["childName"] == "value")) {
                    // line 62
                    $context["childKey"] = "";
                    // line 63
                    echo "                          ";
                    $context["childName"] = ($context["itemName"] ?? null);
                } elseif ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 // line 64
$context["childName"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ".") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                    // line 65
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 66
                    echo "                          ";
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                    // line 67
                    echo "                      ";
                } else {
                    // line 68
                    echo "                          ";
                    $context["childKey"] = $context["childName"];
                    // line 69
                    echo "                          ";
                    $context["childName"] = twig_replace_filter($context["childName"], ["*" => ($context["key"] ?? null)]);
                    // line 70
                    echo "                      ";
                }
                // line 71
                echo "                      ";
                $context["child"] = twig_array_merge($context["child"], ["name" => $context["childName"]]);
                // line 72
                echo "
                      ";
                // line 73
                if (($this->getAttribute($context["child"], "type", []) == "key")) {
                    // line 74
                    echo "                          ";
                    // line 75
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/fieldset/fieldset.html.twig", 75)->display(twig_array_merge($context, ["field" =>                     // line 76
$context["child"], "value" => ($context["key"] ?? null)]));
                    // line 78
                    echo "                      ";
                } elseif (($this->getAttribute($context["child"], "key", []) == true)) {
                    // line 79
                    echo "                          ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 80
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"], "forms/fields/fieldset/fieldset.html.twig", 79)->display(twig_array_merge($context, ["field" =>                     // line 82
$context["child"], "value" => ($context["key"] ?? null)]));
                    // line 84
                    echo "                      ";
                } elseif ($this->getAttribute($context["child"], "type", [])) {
                    // line 85
                    echo "                          ";
                    $context["originalValue"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method");
                    // line 86
                    echo "                          ";
                    // line 87
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute(                    // line 88
$context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/fieldset/fieldset.html.twig", 87)->display(twig_array_merge($context, ["field" =>                     // line 90
$context["child"], "value" => $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")]));
                    // line 92
                    echo "                      ";
                }
                // line 93
                echo "                  ";
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "              ";
        }
        // line 95
        echo "              ";
    }

    public function getTemplateName()
    {
        return "forms/fields/fieldset/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 95,  304 => 94,  290 => 93,  287 => 92,  285 => 90,  284 => 88,  283 => 87,  281 => 86,  278 => 85,  275 => 84,  273 => 82,  272 => 80,  270 => 79,  267 => 78,  265 => 76,  264 => 75,  262 => 74,  260 => 73,  257 => 72,  254 => 71,  251 => 70,  248 => 69,  245 => 68,  242 => 67,  239 => 66,  237 => 65,  235 => 64,  232 => 63,  230 => 62,  228 => 61,  210 => 60,  208 => 59,  205 => 58,  202 => 57,  196 => 55,  190 => 53,  187 => 52,  184 => 51,  181 => 50,  177 => 37,  170 => 32,  167 => 31,  164 => 30,  160 => 23,  154 => 21,  152 => 20,  148 => 19,  143 => 18,  137 => 16,  134 => 15,  131 => 14,  126 => 96,  124 => 50,  120 => 48,  113 => 38,  111 => 30,  108 => 29,  105 => 27,  101 => 25,  98 => 24,  95 => 14,  89 => 12,  87 => 11,  79 => 10,  67 => 6,  64 => 5,  59 => 98,  57 => 5,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
  <div class=\"form-fieldset{% if vertical %} vertical{% endif %}{% if field.classes is defined %} {{ field.classes }}{% endif %}\">
    {% block contents %}
      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_{{ field.name }}\"{% if not field.collapsible or not field.collapsed %} checked=\"checked\"{% endif %} />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label{% if field.collapsible %} for=\"fieldset_collapsible_{{ field.name }}\" class=\"form-fieldset--cursor\"{% endif %}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">
            {% endif %}
            {% block label %}
              {% if field.icon %}
                <i class=\"fa fa-fw fa-{{ field.icon }}\"></i>
              {% endif %}
              {{ field.title|tu }}
              {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
              {% if field.info %}
                <span class=\"form-fieldset--info\">{{ field.info|tu }}</span>
              {% endif %}
            {% endblock %}
          {% if field.help %}
          </span>
          {% endif %}

          {# Actions panel #}
          <span class=\"actions\">
            {% block actions %}
              {% if field.collapsible %}
                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              {% endif %}
            {% endblock %}
          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        {#{% block global_attributes %}
          data-grav-field=\"{{ field.type }}\"
          data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
          data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
        {% endblock %}#}
      >

          {% block group %}
              {% if field.text %}
                {% if grav.twig.twig.filters['tu'] is defined %}
                    {{ field.markdown ? field.text|tu|markdown : '<p>' ~ field.text|tu ~ '</p>' }}
                {% else %}
                    {{ field.markdown ? field.text|t|markdown : '<p>' ~ field.t ~ '</p>' }}
                {% endif %}
              {% endif %}

              {% if field.fields %}
                  {% for childName, child in field.fields %}
                      {%- if childName == 'value' -%}
                          {% set childKey = '' %}
                          {% set childName = itemName -%}
                      {%- elseif childName starts with '.' -%}
                          {% set childKey = childName|trim('.') %}
                          {% set childName = itemName ~ childName %}
                      {% else %}
                          {% set childKey = childName %}
                          {% set childName = childName|replace({'*': key}) %}
                      {% endif %}
                      {% set child = child|merge({ name: childName }) %}

                      {% if child.type == 'key' %}
                          {%
                              include 'forms/fields/key/key.html.twig'
                              with { field: child, value: key }
                          %}
                      {% elseif child.key == true %}
                          {% include [
                              \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                              'forms/fields/key/key.html.twig'
                              ] with { field: child, value: key }
                          %}
                      {% elseif child.type %}
                          {% set originalValue = data.value(child.name) %}
                          {%
                              include [
                              \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                              'forms/fields/text/text.html.twig'
                              ] with { field: child, value: data.value(child.name) }
                          %}
                      {% endif %}
                  {% endfor %}
              {% endif %}
              {% endblock %}
      </div>
    {% endblock %}
  </div>
{% endblock %}
", "forms/fields/fieldset/fieldset.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\fieldset\\fieldset.html.twig");
    }
}
