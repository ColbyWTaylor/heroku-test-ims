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

/* columns_definitions/column_virtuality.twig */
class __TwigTemplate_b73c0421299fc12c250f12dc60fd9c82ea8e1df305bfc72827c222496b17334e extends \Twig\Template
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
        echo "<select name=\"field_virtuality[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 2
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    class=\"virtuality\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            // line 6
            if ((($this->getAttribute(($context["column_meta"] ?? null), "Extra", [], "array", true, true) && (            // line 7
$context["key"] != "")) && (strpos($this->getAttribute(            // line 8
($context["column_meta"] ?? null), "Extra", [], "array"), $context["key"]) === 0))) {
                // line 9
                echo "                selected=\"selected\"";
            }
            // line 10
            echo ">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>

";
        // line 16
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 17
            echo "    ";
            ob_start(function () { return ''; });
            // line 18
            echo "    <textarea name=\"field_expression[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        cols=\"15\"
        class=\"textfield expression\">
        ";
            // line 21
            echo twig_escape_filter($this->env, ($context["expression"] ?? null), "html", null, true);
            echo "
    </textarea>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } else {
            // line 25
            echo "    <input type=\"text\"
        name=\"field_expression[";
            // line 26
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        size=\"12\"
        value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["expression"] ?? null), "html", null, true);
            echo "\"
        placeholder=\"";
            // line 29
            echo _gettext("Expression");
            echo "\"
        class=\"textfield expression\" />
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_virtuality.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  100 => 28,  95 => 26,  92 => 25,  85 => 21,  78 => 18,  75 => 17,  73 => 16,  69 => 14,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  51 => 7,  50 => 6,  46 => 5,  42 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_virtuality.twig", "/workspace/backend-test/public/templates/columns_definitions/column_virtuality.twig");
    }
}
