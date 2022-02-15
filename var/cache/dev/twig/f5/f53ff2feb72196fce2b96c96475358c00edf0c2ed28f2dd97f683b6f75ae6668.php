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

/* service_guide/listService.html.twig */
class __TwigTemplate_88b25e55cb006d50e8a3a8ffbe627f4cc36744f0175daea54182c23dfc71a34d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_guide/listService.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_guide/listService.html.twig"));

        // line 1
        echo "
<table>
    <tr>
        <th> Nb Heure </th>

        <th> Prix </th>

    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listService"]) || array_key_exists("listService", $context) ? $context["listService"] : (function () { throw new RuntimeError('Variable "listService" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "        <tr>
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "NbHeure", [], "any", false, false, false, 11), "html", null, true);
            echo " 
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprimerService", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Supprimer</a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierService", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Update</a>
             </td>
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Prix", [], "any", false, false, false, 15), "html", null, true);
            echo " </td>



    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "service_guide/listService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  73 => 15,  68 => 13,  64 => 12,  60 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table>
    <tr>
        <th> Nb Heure </th>

        <th> Prix </th>

    </tr>
    {% for c in listService %}
        <tr>
            <td> {{ c.NbHeure }} 
            <a href=\"{{ path('SupprimerService',{'id':c.id}) }}\">Supprimer</a>
            <a href=\"{{ path('ModifierService',{'id':c.id}) }}\">Update</a>
             </td>
            <td> {{ c.Prix }} </td>



    {% endfor%}

</table>", "service_guide/listService.html.twig", "C:\\Users\\USER\\Desktop\\PIDEVProject\\PiWeb\\PiDevBackend\\templates\\service_guide\\listService.html.twig");
    }
}
