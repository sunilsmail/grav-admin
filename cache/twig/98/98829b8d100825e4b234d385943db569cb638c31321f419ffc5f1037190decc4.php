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

/* forms/fields/flex-objects/flex-objects.html.twig */
class __TwigTemplate_b49ffb5286166b8da753e249d21085321f5ae034599929c57dc8727f8e756f89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/flex-objects/flex-objects.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_input($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $context["all"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "flex_objects", []), "all", []);
        // line 17
        echo "    ";
        if (count(($context["all"] ?? null))) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
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
            foreach ($context['_seq'] as $context["label"] => $context["directory"]) {
                // line 19
                echo "        ";
                $context["url"] = $this->getAttribute($context["directory"], "blueprintFile", []);
                // line 20
                echo "        ";
                $context["found"] = (twig_in_filter($this->getAttribute($context["directory"], "blueprintFile", []), ($context["value"] ?? null)) || $this->getAttribute($context["directory"], "enabled", []));
                // line 21
                echo "        <div class=\"form-data block size-2-3\" data-grav-field=\"toggle\" data-grav-disabled=\"\" data-grav-default=\"null\" data-grav-field-name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", []), "html", null, true);
                echo "]\">
        <div class=\"switch-toggle switch-grav switch-2\">
            ";
                // line 23
                $context["maxLen"] = 0;
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "PLUGIN_ADMIN.ENABLED", 1 => "PLUGIN_ADMIN.DISABLED"]);
                foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                    // line 25
                    echo "                ";
                    $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"])));
                    // line 26
                    echo "                ";
                    $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
                    // line 27
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                $context["id"] = ((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "_") . $context["label"]);
                // line 30
                echo "
            <input type=\"radio\"
                   value=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"
                   id=\"";
                // line 33
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_yes"), "html", null, true);
                echo "\"
                   name=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", []), "html", null, true);
                echo "]\"
                   class=\"highlight\"
                   ";
                // line 36
                if (($context["found"] ?? null)) {
                    // line 37
                    echo "                   checked=\"checked\"
                   ";
                }
                // line 39
                echo "            />
            ";
                // line 40
                $context["text"] = "PLUGIN_ADMIN.ENABLED";
                // line 41
                echo "            ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["text"] ?? null))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, ($context["text"] ?? null)))));
                // line 42
                echo "            <label for=\"";
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_yes"), "html", null, true);
                echo "\">";
                echo twig_trim_filter($this->getAttribute($this, "spanToggle", [0 => ($context["translation"] ?? null), 1 => ($context["maxLen"] ?? null)], "method"));
                echo "</label>
            <input type=\"radio\"
                   value=\"\"
                   name=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", []), "html", null, true);
                echo "]\"
                   id=\"";
                // line 46
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_no"), "html", null, true);
                echo "\"
                   ";
                // line 47
                if ( !($context["found"] ?? null)) {
                    // line 48
                    echo "                   checked=\"checked\"
                   ";
                }
                // line 50
                echo "            />
            ";
                // line 51
                $context["text"] = "PLUGIN_ADMIN.DISABLED";
                // line 52
                echo "            ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["text"] ?? null))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, ($context["text"] ?? null)))));
                // line 53
                echo "            <label for=\"";
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_no"), "html", null, true);
                echo "\">";
                echo twig_trim_filter($this->getAttribute($this, "spanToggle", [0 => ($context["translation"] ?? null), 1 => ($context["maxLen"] ?? null)], "method"));
                echo "</label>
        </div>
        <span>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["directory"], "title", []), "html", null, true);
                echo "</span>
        </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['directory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <div>No custom flex directories created</div>
    ";
        }
    }

    // line 5
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 7
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/flex-objects/flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 7,  235 => 6,  222 => 5,  216 => 59,  213 => 58,  196 => 55,  188 => 53,  185 => 52,  183 => 51,  180 => 50,  176 => 48,  174 => 47,  170 => 46,  164 => 45,  155 => 42,  152 => 41,  150 => 40,  147 => 39,  143 => 37,  141 => 36,  134 => 34,  130 => 33,  126 => 32,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  108 => 26,  105 => 25,  100 => 24,  98 => 23,  90 => 21,  87 => 20,  84 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  51 => 12,  46 => 11,  43 => 10,  38 => 1,  36 => 3,  30 => 1,);
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

{% set value = (value is null ? field.default : value) %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% block global_attributes %}
    {{ parent() }}
    data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}
    {% set all = grav.flex_objects.all %}
    {% if all|count %}
    {% for label, directory in all %}
        {% set url = directory.blueprintFile %}
        {% set found = directory.blueprintFile in value or directory.enabled %}
        <div class=\"form-data block size-2-3\" data-grav-field=\"toggle\" data-grav-disabled=\"\" data-grav-default=\"null\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}[{{ loop.index0 }}]\">
        <div class=\"switch-toggle switch-grav switch-2\">
            {% set maxLen = 0 %}
            {% for text in ['PLUGIN_ADMIN.ENABLED', 'PLUGIN_ADMIN.DISABLED'] %}
                {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
                {% set maxLen = max(translation|length, maxLen) %}
            {% endfor %}

            {% set id = \"toggle_\" ~ field.name ~ '_' ~ label %}

            <input type=\"radio\"
                   value=\"{{ url }}\"
                   id=\"{{ id ~ '_yes' }}\"
                   name=\"{{ (scope ~ field.name)|fieldName }}[{{ loop.index0 }}]\"
                   class=\"highlight\"
                   {% if found %}
                   checked=\"checked\"
                   {% endif %}
            />
            {% set text = 'PLUGIN_ADMIN.ENABLED' %}
            {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}
            <label for=\"{{ id ~ '_yes' }}\">{{ (_self.spanToggle(translation, maxLen)|trim)|raw }}</label>
            <input type=\"radio\"
                   value=\"\"
                   name=\"{{ (scope ~ field.name)|fieldName }}[{{ loop.index0 }}]\"
                   id=\"{{ id ~ '_no' }}\"
                   {% if not found %}
                   checked=\"checked\"
                   {% endif %}
            />
            {% set text = 'PLUGIN_ADMIN.DISABLED' %}
            {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}
            <label for=\"{{ id ~ '_no' }}\">{{ (_self.spanToggle(translation, maxLen)|trim)|raw }}</label>
        </div>
        <span>{{ directory.title }}</span>
        </div>
    {% endfor %}
    {% else %}
        <div>No custom flex directories created</div>
    {% endif %}
{% endblock %}", "forms/fields/flex-objects/flex-objects.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\forms\\fields\\flex-objects\\flex-objects.html.twig");
    }
}
