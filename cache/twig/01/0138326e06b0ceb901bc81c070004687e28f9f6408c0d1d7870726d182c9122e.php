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

/* partials/entries-list.html.twig */
class __TwigTemplate_6e3c68cec5d421ef00c248a6c007dae4eee699f3dd23bfafc690eba55d13cc7a extends \Twig\Template
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
        $context["tbl_data"] = $this->getAttribute(($context["flex_entries"] ?? null), "getData", []);
        // line 2
        $context["entry_url"] = ((((($context["base_url_relative"] ?? null) . "/") . ($context["location"] ?? null)) . "/entries/id") . ($context["separator"] ?? null));
        // line 3
        echo "
";
        // line 4
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["tbl_data"] ?? null), "toArray", []))) {
            // line 5
            echo "    <div class=\"no-entries\">
        There are currently no entries, click the <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . "/flex-directory/entries/action:add"), "html", null, true);
            echo "\">Add</a> button to create a new one...
    </div>
";
        } else {
            // line 9
            echo "    <table id=\"data-table\" class=\"tablesorter tablesorter-default\">
        <colgroup>
            <col width=\"24\" />
            <col width=\"24\" />
            <col width=\"22\" />
            <col width=\"22\" />
            <col width=\"8\" />
        </colgroup>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Tags</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tbl_data"] ?? null), "toArray", []));
            foreach ($context['_seq'] as $context["id"] => $context["entry"]) {
                // line 28
                echo "            <tr>
                <td>
                    ";
                // line 30
                if ($this->getAttribute($context["entry"], "published", [])) {
                    // line 31
                    echo "                        <i class=\"published fa fa-check-circle\"></i>
                    ";
                } else {
                    // line 33
                    echo "                        <i class=\"unpublished fa fa-times-circle\"></i>
                    ";
                }
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (($context["entry_url"] ?? null) . $context["id"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "first_name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "last_name", []), "html", null, true);
                echo "</a>
                </td>
                <td>
                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "email", []), "html", null, true);
                echo "
                </td>
                <td>
                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "website", []), "html", null, true);
                echo "\"><i class=\"fa fa-link\"></i> URL</a>
                </td>
                <td>
                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "tags", []), ", "), "html", null, true);
                echo "
                </td>
                <td>

                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, (($context["entry_url"] ?? null) . $context["id"]), "html", null, true);
                echo "\"
                       title=\"Edit '";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "first_name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "last_name", []), "html", null, true);
                echo "'\"
                       class=\"edit-action\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#delete\"
                       class=\"page-delete delete-action\"
                       title=\"Delete '";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "first_name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "last_name", []), "html", null, true);
                echo "'\"
                       data-remodal-target=\"delete\"
                       data-delete-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((($context["entry_url"] ?? null) . $context["id"]) . "/action") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\"><i class=\"fa fa-close\"></i></a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </tbody>
    </table>

    <div id=\"pager\" class=\"pager\">
        <form>
            <button class=\"button first\"><i class=\"fa fa-fw fa-angle-double-left\"></i></button>
            <button class=\"button prev\"><i class=\"fa fa-fw fa-chevron-left\"></i></button>

            <span class=\"pagedisplay\"></span>

            <button class=\"button next\"><i class=\"fa fa-fw fa-chevron-right\"></i></button>
            <button class=\"button last\"><i class=\"fa fa-fw fa-angle-double-right\"></i></button>

            <select data-grav-selectize class=\"pagesize\">
                <option selected=\"selected\" value=\"10\">10</option>
                <option value=\"20\">20</option>
                <option value=\"50\">50</option>
                <option value=\"100\">100</option>
                <option value=\"all\">All</option>
            </select>
        </form>
    </div>

    <script>
        ((function(\$) {
            var list = \$('#data-table');

            list.tablesorter({
                theme: 'blue',
                cssChildRow: 'tablesorter-childRow',
                widgets: ['zebra', 'filter', 'pager'],
                headers: {
                    2: { sorter: false, filter: false },
                    3: { sorter: false, filter: false },
                    4: { sorter: false, filter: false }
                },
                widgetOptions: {
                    pager_output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
                    pager_removeRows: false,
                    pager_size: 10,
                    filter_childRows: false,
                    filter_cssFilter: 'tablesorter-filter',
                    filter_startsWith: false,
                    filter_ignoreCase: true
                }
            });

            list.find('.tablesorter-childRow td').addClass('hidden');

            \$('#pager button').on('click', function(e) { e.preventDefault(); });
        })(jQuery));
    </script>

";
        }
        // line 113
        echo "
";
        // line 114
        $this->loadTemplate("partials/modal-remove.html.twig", "partials/entries-list.html.twig", 114)->display(twig_array_merge($context, ["name" => "entry"]));
    }

    public function getTemplateName()
    {
        return "partials/entries-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 114,  202 => 113,  146 => 59,  136 => 55,  129 => 53,  120 => 49,  116 => 48,  109 => 44,  103 => 41,  97 => 38,  86 => 35,  82 => 33,  78 => 31,  76 => 30,  72 => 28,  68 => 27,  48 => 9,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set tbl_data = flex_entries.getData %}
{% set entry_url =  base_url_relative ~ '/' ~ location ~ '/entries/id' ~ separator %}

{% if not tbl_data.toArray|length %}
    <div class=\"no-entries\">
        There are currently no entries, click the <a href=\"{{ base_url ~ '/flex-directory/entries/action:add' }}\">Add</a> button to create a new one...
    </div>
{% else %}
    <table id=\"data-table\" class=\"tablesorter tablesorter-default\">
        <colgroup>
            <col width=\"24\" />
            <col width=\"24\" />
            <col width=\"22\" />
            <col width=\"22\" />
            <col width=\"8\" />
        </colgroup>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Tags</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {% for id,entry in tbl_data.toArray %}
            <tr>
                <td>
                    {% if entry.published %}
                        <i class=\"published fa fa-check-circle\"></i>
                    {% else %}
                        <i class=\"unpublished fa fa-times-circle\"></i>
                    {% endif %}
                    <a href=\"{{ entry_url ~ id }}\">{{ entry.first_name }} {{ entry.last_name }}</a>
                </td>
                <td>
                    {{ entry.email }}
                </td>
                <td>
                    <a href=\"{{ entry.website }}\"><i class=\"fa fa-link\"></i> URL</a>
                </td>
                <td>
                    {{ entry.tags|join(', ') }}
                </td>
                <td>

                    <a href=\"{{ entry_url ~ id }}\"
                       title=\"Edit '{{ entry.first_name }} {{ entry.last_name }}'\"
                       class=\"edit-action\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#delete\"
                       class=\"page-delete delete-action\"
                       title=\"Delete '{{ entry.first_name }} {{ entry.last_name }}'\"
                       data-remodal-target=\"delete\"
                       data-delete-url=\"{{ uri.addNonce(entry_url ~ id  ~ '/action' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div id=\"pager\" class=\"pager\">
        <form>
            <button class=\"button first\"><i class=\"fa fa-fw fa-angle-double-left\"></i></button>
            <button class=\"button prev\"><i class=\"fa fa-fw fa-chevron-left\"></i></button>

            <span class=\"pagedisplay\"></span>

            <button class=\"button next\"><i class=\"fa fa-fw fa-chevron-right\"></i></button>
            <button class=\"button last\"><i class=\"fa fa-fw fa-angle-double-right\"></i></button>

            <select data-grav-selectize class=\"pagesize\">
                <option selected=\"selected\" value=\"10\">10</option>
                <option value=\"20\">20</option>
                <option value=\"50\">50</option>
                <option value=\"100\">100</option>
                <option value=\"all\">All</option>
            </select>
        </form>
    </div>

    <script>
        ((function(\$) {
            var list = \$('#data-table');

            list.tablesorter({
                theme: 'blue',
                cssChildRow: 'tablesorter-childRow',
                widgets: ['zebra', 'filter', 'pager'],
                headers: {
                    2: { sorter: false, filter: false },
                    3: { sorter: false, filter: false },
                    4: { sorter: false, filter: false }
                },
                widgetOptions: {
                    pager_output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
                    pager_removeRows: false,
                    pager_size: 10,
                    filter_childRows: false,
                    filter_cssFilter: 'tablesorter-filter',
                    filter_startsWith: false,
                    filter_ignoreCase: true
                }
            });

            list.find('.tablesorter-childRow td').addClass('hidden');

            \$('#pager button').on('click', function(e) { e.preventDefault(); });
        })(jQuery));
    </script>

{% endif %}

{% include 'partials/modal-remove.html.twig' with { name: 'entry' } %}
", "partials/entries-list.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\plugins\\flex-directory\\admin\\templates\\partials\\entries-list.html.twig");
    }
}
