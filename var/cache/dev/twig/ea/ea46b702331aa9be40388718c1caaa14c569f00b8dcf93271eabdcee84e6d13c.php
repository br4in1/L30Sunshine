<?php

/* @Leo/reunion/show.html.twig */
class __TwigTemplate_ec287b8ddca0e9517ad5dfc85cce546799545d8c8422c87e3e54cf6c0239c35b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Leo/reunion/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Leo/reunion/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Leo/reunion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reunion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 14, $this->source); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 14, $this->source); })()), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 18, $this->source); })()), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 22, $this->source); })()), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ordredujour</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 26, $this->source); })()), "ordreDuJour", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pv</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 30, $this->source); })()), "pv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 34, $this->source); })()), "idUser", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new Twig_Error_Runtime('Variable "reunion" does not exist.', 44, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Leo/reunion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  127 => 47,  121 => 44,  115 => 41,  105 => 34,  98 => 30,  91 => 26,  84 => 22,  77 => 18,  68 => 14,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reunion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reunion.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if reunion.date %}{{ reunion.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ reunion.type }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ reunion.lieu }}</td>
            </tr>
            <tr>
                <th>Ordredujour</th>
                <td>{{ reunion.ordreDuJour }}</td>
            </tr>
            <tr>
                <th>Pv</th>
                <td>{{ reunion.pv }}</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>{{ reunion.idUser }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reunion_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reunion_edit', { 'id': reunion.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Leo/reunion/show.html.twig", "/Users/simo/Desktop/Leo/src/LeoBundle/Resources/views/reunion/show.html.twig");
    }
}
