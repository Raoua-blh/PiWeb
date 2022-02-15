<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coach/listeCoach.html.twig */
class __TwigTemplate_c720b9e218c3102b77ae8e486b7c56cda7a505ccccf1c6fca6148812010cfdde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/listeCoach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/listeCoach.html.twig"));

        // line 1
        echo "
<table>
    <tr>
        <th> Nom Coach </th>
        <th> Level </th>
        <th> Cv </th>


    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcoach"]) || array_key_exists("listcoach", $context) ? $context["listcoach"] : (function () { throw new RuntimeError('Variable "listcoach" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "        <tr>
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "NomCoach", [], "any", false, false, false, 12), "html", null, true);
            echo " 
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Supprimercoach", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Supprimer</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierCoach", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">Update</a>
             </td>
            <td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Level", [], "any", false, false, false, 16), "html", null, true);
            echo " </td>
             <td> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Cv", [], "any", false, false, false, 17), "html", null, true);
            echo " </td>



    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coach/listeCoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  78 => 17,  74 => 16,  69 => 14,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table>
    <tr>
        <th> Nom Coach </th>
        <th> Level </th>
        <th> Cv </th>


    </tr>
    {% for c in listcoach %}
        <tr>
            <td> {{ c.NomCoach }} 
            <a href=\"{{ path('Supprimercoach',{'id':c.id}) }}\">Supprimer</a>
            <a href=\"{{ path('ModifierCoach',{'id':c.id}) }}\">Update</a>
             </td>
            <td> {{ c.Level }} </td>
             <td> {{ c.Cv }} </td>



    {% endfor%}

</table>", "coach/listeCoach.html.twig", "C:\\Users\\USER\\Desktop\\PIDEVProject\\PiWeb\\PiDevBackend\\templates\\coach\\listeCoach.html.twig");
    }
}
