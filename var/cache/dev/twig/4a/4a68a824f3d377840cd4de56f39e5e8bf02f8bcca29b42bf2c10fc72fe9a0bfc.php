<?php

/* @Leo/reunion/index.html.twig */
class __TwigTemplate_d7afdcde8cb53d4f1a1c46fde6835020b9d3b632d070b1615e07f58b86e12a87 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Leo/reunion/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Leo/reunion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Leo/reunion/index.html.twig"));

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
        echo "
    <button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#m_scrollable_modal_1\" class=\"btn btn-primary m-btn m-btn--icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nouvelle Reunion</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
    </button>

    <div class=\"m-portlet m-portlet--full-height \">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
                    <h3 class=\"m-portlet__head-text\">
                        Reunions
                    </h3>
                </div>
            </div>
            <div class=\"m-portlet__head-tools\">
                <ul class=\"nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm\" role=\"tablist\">
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#m_widget5_tab1_content\" role=\"tab\">
                            Toutes
                        </a>
                    </li>
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_widget5_tab2_content\" role=\"tab\">
                            Statutaires
                        </a>
                    </li>
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_widget5_tab3_content\" role=\"tab\">
                            Sociales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"m-portlet__body\">

            <!--begin::Content-->
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"m_widget5_tab1_content\" aria-expanded=\"true\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reunions"]) || array_key_exists("reunions", $context) ? $context["reunions"] : (function () { throw new Twig_Error_Runtime('Variable "reunions" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 47
            echo "
                    <!--begin::m-widget5-->
                    <div class=\"m-widget5\">
                        <div class=\"m-widget5__item\">
                            <div class=\"m-widget5__content\">
                                <div class=\"m-widget5__pic\">
                                    <img class=\"m-widget7__img\" ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()) == "statutaire")) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/statutaire.png"), "html", null, true);
                echo "\"";
            } else {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/sociale.png"), "html", null, true);
                echo "\" ";
            }
            echo "alt=\"\">
                                </div>

                                <div class=\"m-widget5__section\">
                                    <h4 class=\"m-widget5__title\">
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_show", array("id" => twig_get_attribute($this->env, $this->source, $context["reunion"], "id", array()))), "html", null, true);
            echo "\">Reunion ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</a>
                                    </h4>

                                    <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "idUser", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>

                            </div>
                            <div class=\"m-widget5__content\">
                                <div class=\"m-widget5__stats1\">
                                    <span class=\"m-widget5__number\">12</span>
                                    <br>
                                    <span class=\"m-widget5__sales\">Membres</span>
                                </div>
                                <div class=\"m-widget5__stats2\">
                                    <span class=\"m-widget5__number\">10</span>
                                    <br>
                                    <span class=\"m-widget5__votes\">Invité(e)s</span>
                                </div>
                            </div>
                        </div>
                    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    <!--end::m-widget5-->
                </div>
                <div class=\"tab-pane\" id=\"m_widget5_tab2_content\" aria-expanded=\"false\">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reunions"]) || array_key_exists("reunions", $context) ? $context["reunions"] : (function () { throw new Twig_Error_Runtime('Variable "reunions" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 88
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()) == "statutaire")) {
                // line 89
                echo "                        <!--begin::m-widget5-->
                        <div class=\"m-widget5\">
                            <div class=\"m-widget5__item\">
                                <div class=\"m-widget5__content\">
                                    <div class=\"m-widget5__pic\">
                                        <img class=\"m-widget7__img\" ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()) == "statutaire")) {
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/statutaire.png"), "html", null, true);
                    echo "\"";
                } else {
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/sociale.png"), "html", null, true);
                    echo "\" ";
                }
                echo "alt=\"\">
                                    </div>

                                    <div class=\"m-widget5__section\">
                                        <h4 class=\"m-widget5__title\">
                                            <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_show", array("id" => twig_get_attribute($this->env, $this->source, $context["reunion"], "id", array()))), "html", null, true);
                echo "\">Reunion ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()), "html", null, true);
                echo " du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</a>
                                        </h4>

                                        <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "idUser", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"m-widget5__content\">
                                    <div class=\"m-widget5__stats1\">
                                        <span class=\"m-widget5__number\">12</span>
                                        <br>
                                        <span class=\"m-widget5__sales\">Membres</span>
                                    </div>
                                    <div class=\"m-widget5__stats2\">
                                        <span class=\"m-widget5__number\">10</span>
                                        <br>
                                        <span class=\"m-widget5__votes\">Invité(e)s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 125
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </div>
                <div class=\"tab-pane\" id=\"m_widget5_tab3_content\" aria-expanded=\"false\">

                    <!--begin::m-widget5-->
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reunions"]) || array_key_exists("reunions", $context) ? $context["reunions"] : (function () { throw new Twig_Error_Runtime('Variable "reunions" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 131
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()) == "sociale")) {
                // line 132
                echo "                            <!--begin::m-widget5-->
                            <div class=\"m-widget5\">
                                <div class=\"m-widget5__item\">
                                    <div class=\"m-widget5__content\">
                                        <div class=\"m-widget5__pic\">
                                            <img class=\"m-widget7__img\" ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()) == "statutaire")) {
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/statutaire.png"), "html", null, true);
                    echo "\"";
                } else {
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Images/sociale.png"), "html", null, true);
                    echo "\" ";
                }
                echo "alt=\"\">
                                        </div>

                                        <div class=\"m-widget5__section\">
                                            <h4 class=\"m-widget5__title\">
                                                <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_show", array("id" => twig_get_attribute($this->env, $this->source, $context["reunion"], "id", array()))), "html", null, true);
                echo "\">Reunion ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "type", array()), "html", null, true);
                echo " du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "date", array()), "m/d/Y"), "html", null, true);
                echo "</a>
                                            </h4>

                                            <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunion"], "idUser", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"m-widget5__content\">
                                        <div class=\"m-widget5__stats1\">
                                            <span class=\"m-widget5__number\">12</span>
                                            <br>
                                            <span class=\"m-widget5__sales\">Membres</span>
                                        </div>
                                        <div class=\"m-widget5__stats2\">
                                            <span class=\"m-widget5__number\">10</span>
                                            <br>
                                            <span class=\"m-widget5__votes\">Invité(e)s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 168
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
                    <!--end::m-widget5-->
                </div>
            </div>

            <!--end::Content-->
        </div>
    </div>

    <!--begin::Modal-->
    <div class=\"modal fade\" id=\"m_scrollable_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"m-scrollable\" data-scrollbar-shown=\"true\" data-scrollable=\"true\" data-height=\"200\">
                        <h1>Reunion creation</h1>

                        ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 192, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->source); })()), 'widget');
        echo "

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"submit\" value=\"Create\" />
                    ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 199, $this->source); })()), 'form_end');
        echo "

                    <ul>
                        <li>
                            <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reunion_index");
        echo "\">Back to the list</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--end::Modal-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Leo/reunion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 203,  357 => 199,  348 => 193,  344 => 192,  319 => 169,  313 => 168,  289 => 147,  277 => 142,  261 => 137,  254 => 132,  251 => 131,  247 => 130,  241 => 126,  235 => 125,  211 => 104,  199 => 99,  183 => 94,  176 => 89,  173 => 88,  169 => 87,  164 => 84,  137 => 63,  125 => 58,  109 => 53,  101 => 47,  97 => 46,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#m_scrollable_modal_1\" class=\"btn btn-primary m-btn m-btn--icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Nouvelle Reunion</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
    </button>

    <div class=\"m-portlet m-portlet--full-height \">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
                    <h3 class=\"m-portlet__head-text\">
                        Reunions
                    </h3>
                </div>
            </div>
            <div class=\"m-portlet__head-tools\">
                <ul class=\"nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm\" role=\"tablist\">
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#m_widget5_tab1_content\" role=\"tab\">
                            Toutes
                        </a>
                    </li>
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_widget5_tab2_content\" role=\"tab\">
                            Statutaires
                        </a>
                    </li>
                    <li class=\"nav-item m-tabs__item\">
                        <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_widget5_tab3_content\" role=\"tab\">
                            Sociales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"m-portlet__body\">

            <!--begin::Content-->
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"m_widget5_tab1_content\" aria-expanded=\"true\">
    {% for reunion in reunions %}

                    <!--begin::m-widget5-->
                    <div class=\"m-widget5\">
                        <div class=\"m-widget5__item\">
                            <div class=\"m-widget5__content\">
                                <div class=\"m-widget5__pic\">
                                    <img class=\"m-widget7__img\" {% if reunion.type==\"statutaire\" %} src=\"{{ asset('assets/Images/statutaire.png') }}\"{% else %} src=\"{{ asset('assets/Images/sociale.png') }}\" {% endif %}alt=\"\">
                                </div>

                                <div class=\"m-widget5__section\">
                                    <h4 class=\"m-widget5__title\">
                                        <a href=\"{{ path('reunion_show', { 'id': reunion.id }) }}\">Reunion {{ reunion.type }} du {{ reunion.date|date(\"m/d/Y\") }}</a>
                                    </h4>

                                    <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez {{ reunion.idUser }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>

                            </div>
                            <div class=\"m-widget5__content\">
                                <div class=\"m-widget5__stats1\">
                                    <span class=\"m-widget5__number\">12</span>
                                    <br>
                                    <span class=\"m-widget5__sales\">Membres</span>
                                </div>
                                <div class=\"m-widget5__stats2\">
                                    <span class=\"m-widget5__number\">10</span>
                                    <br>
                                    <span class=\"m-widget5__votes\">Invité(e)s</span>
                                </div>
                            </div>
                        </div>
                    </div>
{% endfor %}
                    <!--end::m-widget5-->
                </div>
                <div class=\"tab-pane\" id=\"m_widget5_tab2_content\" aria-expanded=\"false\">
                    {% for reunion in reunions %}
                        {% if reunion.type==\"statutaire\" %}
                        <!--begin::m-widget5-->
                        <div class=\"m-widget5\">
                            <div class=\"m-widget5__item\">
                                <div class=\"m-widget5__content\">
                                    <div class=\"m-widget5__pic\">
                                        <img class=\"m-widget7__img\" {% if reunion.type==\"statutaire\" %} src=\"{{ asset('assets/Images/statutaire.png') }}\"{% else %} src=\"{{ asset('assets/Images/sociale.png') }}\" {% endif %}alt=\"\">
                                    </div>

                                    <div class=\"m-widget5__section\">
                                        <h4 class=\"m-widget5__title\">
                                            <a href=\"{{ path('reunion_show', { 'id': reunion.id }) }}\">Reunion {{ reunion.type }} du {{ reunion.date|date(\"m/d/Y\") }}</a>
                                        </h4>

                                        <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez {{ reunion.idUser }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"m-widget5__content\">
                                    <div class=\"m-widget5__stats1\">
                                        <span class=\"m-widget5__number\">12</span>
                                        <br>
                                        <span class=\"m-widget5__sales\">Membres</span>
                                    </div>
                                    <div class=\"m-widget5__stats2\">
                                        <span class=\"m-widget5__number\">10</span>
                                        <br>
                                        <span class=\"m-widget5__votes\">Invité(e)s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    {% endfor %}
                </div>
                <div class=\"tab-pane\" id=\"m_widget5_tab3_content\" aria-expanded=\"false\">

                    <!--begin::m-widget5-->
                    {% for reunion in reunions %}
                        {% if reunion.type==\"sociale\" %}
                            <!--begin::m-widget5-->
                            <div class=\"m-widget5\">
                                <div class=\"m-widget5__item\">
                                    <div class=\"m-widget5__content\">
                                        <div class=\"m-widget5__pic\">
                                            <img class=\"m-widget7__img\" {% if reunion.type==\"statutaire\" %} src=\"{{ asset('assets/Images/statutaire.png') }}\"{% else %} src=\"{{ asset('assets/Images/sociale.png') }}\" {% endif %}alt=\"\">
                                        </div>

                                        <div class=\"m-widget5__section\">
                                            <h4 class=\"m-widget5__title\">
                                                <a href=\"{{ path('reunion_show', { 'id': reunion.id }) }}\">Reunion {{ reunion.type }} du {{ reunion.date|date(\"m/d/Y\") }}</a>
                                            </h4>

                                            <div class=\"m-widget5__info\">
                                        <span class=\"m-widget5__info-date m--font-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChez {{ reunion.idUser }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"m-widget5__content\">
                                        <div class=\"m-widget5__stats1\">
                                            <span class=\"m-widget5__number\">12</span>
                                            <br>
                                            <span class=\"m-widget5__sales\">Membres</span>
                                        </div>
                                        <div class=\"m-widget5__stats2\">
                                            <span class=\"m-widget5__number\">10</span>
                                            <br>
                                            <span class=\"m-widget5__votes\">Invité(e)s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}

                    <!--end::m-widget5-->
                </div>
            </div>

            <!--end::Content-->
        </div>
    </div>

    <!--begin::Modal-->
    <div class=\"modal fade\" id=\"m_scrollable_modal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"m-scrollable\" data-scrollbar-shown=\"true\" data-scrollable=\"true\" data-height=\"200\">
                        <h1>Reunion creation</h1>

                        {{ form_start(form) }}
                        {{ form_widget(form) }}

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"submit\" value=\"Create\" />
                    {{ form_end(form) }}

                    <ul>
                        <li>
                            <a href=\"{{ path('reunion_index') }}\">Back to the list</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--end::Modal-->
{% endblock %}
", "@Leo/reunion/index.html.twig", "/Users/simo/Desktop/Leo/src/LeoBundle/Resources/views/reunion/index.html.twig");
    }
}
