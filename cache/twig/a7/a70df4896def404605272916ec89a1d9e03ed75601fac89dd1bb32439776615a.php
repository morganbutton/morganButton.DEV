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

/* partials/media-list-wrapper__list__filters.html.twig */
class __TwigTemplate_3598b95bc08b0b29610d460d7c84a508dad2050c4beff9c024dc9b8312aa3d4e extends \Twig\Template
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
        echo "<div>
    <div class=\"filter-wrapper filter-type\">
        <select class=\"filter js__filter\" data-name=\"type\" data-grav-selectize>
            <option value=\"*\" ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "type"], "method")) {
            echo "selected";
        }
        echo ">All Files</option>
            <option value=\"images\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "type"], "method") == "images")) {
            echo "selected";
        }
        echo ">Images</option>
            <option value=\"videos\"";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "type"], "method") == "videos")) {
            echo "selected";
        }
        echo ">Videos</option>
            <option value=\"audios\"";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "type"], "method") == "audios")) {
            echo "selected";
        }
        echo ">Audio</option>
            <option value=\"files\"";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "type"], "method") == "files")) {
            echo "selected";
        }
        echo ">Files</option>
        </select>
    </div>

    <div class=\"filter-wrapper filter-date\">
        <select class=\"filter js__filter\" data-name=\"date\" data-grav-selectize>
            <option value=\"*\">All Dates</option>
            ";
        // line 15
        $context["theDate"] = twig_date_converter($this->env);
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "filesDates", []));
        foreach ($context['_seq'] as $context["year"] => $context["months"]) {
            // line 17
            echo "                <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["months"]);
            foreach ($context['_seq'] as $context["month"] => $context["number"]) {
                // line 19
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "date"], "method") == (($context["year"] . "-") . $context["month"]))) {
                    echo "selected";
                }
                echo ">
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["theDate"] ?? null), "setDate", [0 => $this->getAttribute(($context["theDate"] ?? null), "format", [0 => "Y"], "method"), 1 => $context["month"], 2 => $this->getAttribute(($context["theDate"] ?? null), "format", [0 => "d"], "method")], "method"), "M"), "html", null, true);
                echo "
                            (";
                // line 21
                echo twig_escape_filter($this->env, $context["number"], "html", null, true);
                echo ")</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['months'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        </select>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__list__filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  110 => 23,  102 => 21,  98 => 20,  87 => 19,  83 => 18,  78 => 17,  73 => 16,  71 => 15,  59 => 8,  53 => 7,  47 => 6,  41 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"filter-wrapper filter-type\">
        <select class=\"filter js__filter\" data-name=\"type\" data-grav-selectize>
            <option value=\"*\" {% if not grav.uri.param('type') %}selected{% endif %}>All Files</option>
            <option value=\"images\" {% if grav.uri.param('type') == 'images' %}selected{% endif %}>Images</option>
            <option value=\"videos\"{% if grav.uri.param('type') == 'videos' %}selected{% endif %}>Videos</option>
            <option value=\"audios\"{% if grav.uri.param('type') == 'audios' %}selected{% endif %}>Audio</option>
            <option value=\"files\"{% if grav.uri.param('type') == 'files' %}selected{% endif %}>Files</option>
        </select>
    </div>

    <div class=\"filter-wrapper filter-date\">
        <select class=\"filter js__filter\" data-name=\"date\" data-grav-selectize>
            <option value=\"*\">All Dates</option>
            {% set theDate = date() %}
            {% for year, months in admin.filesDates %}
                <optgroup label=\"{{year}}\">
                    {% for month, number in months %}
                        <option value=\"{{year}}-{{month}}\" {% if grav.uri.param('date') == year~'-'~month %}selected{% endif %}>
                            {{theDate.setDate(theDate.format('Y'), month, theDate.format('d'))|date('M')}}
                            ({{number}})</option>
                    {% endfor %}
                </optgroup>
            {% endfor %}

        </select>
    </div>
</div>", "partials/media-list-wrapper__list__filters.html.twig", "C:\\wamp64\\www\\moDev\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\media-list-wrapper__list__filters.html.twig");
    }
}
