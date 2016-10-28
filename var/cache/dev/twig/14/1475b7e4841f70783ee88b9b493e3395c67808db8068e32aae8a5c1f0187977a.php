<?php

/* LGPUserBundle:Paiement:index.html.twig */
class __TwigTemplate_3223e43352e219882106d3e75ade7ab9b8c501e6a19b9a9f93eed0dc2abf9fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Paiement:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7985668a06c07c4c3894e9ca6f45be7152787d826a28f3274317e96535bcf5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7985668a06c07c4c3894e9ca6f45be7152787d826a28f3274317e96535bcf5e5->enter($__internal_7985668a06c07c4c3894e9ca6f45be7152787d826a28f3274317e96535bcf5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7985668a06c07c4c3894e9ca6f45be7152787d826a28f3274317e96535bcf5e5->leave($__internal_7985668a06c07c4c3894e9ca6f45be7152787d826a28f3274317e96535bcf5e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3736068602b003b437a5a8db11d638e1c6c723c18182fdbd5ba26c564b082573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3736068602b003b437a5a8db11d638e1c6c723c18182fdbd5ba26c564b082573->enter($__internal_3736068602b003b437a5a8db11d638e1c6c723c18182fdbd5ba26c564b082573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes paiements - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3736068602b003b437a5a8db11d638e1c6c723c18182fdbd5ba26c564b082573->leave($__internal_3736068602b003b437a5a8db11d638e1c6c723c18182fdbd5ba26c564b082573_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fb77bfb8b4883e1d8548661b9c17fd8cb53826adece2221321a61cd3487b572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb77bfb8b4883e1d8548661b9c17fd8cb53826adece2221321a61cd3487b572a->enter($__internal_fb77bfb8b4883e1d8548661b9c17fd8cb53826adece2221321a61cd3487b572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fb77bfb8b4883e1d8548661b9c17fd8cb53826adece2221321a61cd3487b572a->leave($__internal_fb77bfb8b4883e1d8548661b9c17fd8cb53826adece2221321a61cd3487b572a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6315abd231bc668795cdf987afcf6c57beb0aa437fc057967d820babfba61102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6315abd231bc668795cdf987afcf6c57beb0aa437fc057967d820babfba61102->enter($__internal_6315abd231bc668795cdf987afcf6c57beb0aa437fc057967d820babfba61102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["paiements"]) ? $context["paiements"] : $this->getContext($context, "paiements"))) <= 0)) {
            // line 20
            echo "                            <div class=\"notifications-block\">
                                <div class=\"notifications-header\">Mes paiements</div>
                                <div class=\"notifications-content\">
                                    Aucun paiement trouvé !
                                </div>
                            </div>
                        ";
        } else {
            // line 27
            echo "                            <div class=\"notifications-block\">
                                <div class=\"notifications-header\">Mes réservations</div>
                                <div class=\"notifications-content\">

                                    <table class=\"table table-bordered table-stripped\">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Montant</th>
                                            <th>Facture</th>
                                            <th>Reservation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) ? $context["paiements"] : $this->getContext($context, "paiements")));
            foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
                // line 43
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paiement"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["paiement"], "mode", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 46
                if ( !(null === $this->getAttribute($context["paiement"], "facture", array()))) {
                    // line 47
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["paiement"], "facture", array()), "montant", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 49
                echo "                                            </td>
                                            <td>
                                                ";
                // line 51
                if ( !(null === $this->getAttribute($context["paiement"], "facture", array()))) {
                    // line 52
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["paiement"], "facture", array()), "fileName", array()), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-file-pdf-o\"></i>
                                                    </a>
                                                ";
                }
                // line 56
                echo "                                            </td>
                                            <td>
                                                ";
                // line 58
                if ( !(null === $this->getAttribute($context["paiement"], "facture", array()))) {
                    // line 59
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["paiement"], "facture", array()), "reservation", array()), "id", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 61
                echo "                                            </td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        ";
        }
        // line 69
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6315abd231bc668795cdf987afcf6c57beb0aa437fc057967d820babfba61102->leave($__internal_6315abd231bc668795cdf987afcf6c57beb0aa437fc057967d820babfba61102_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Paiement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 69,  166 => 63,  159 => 61,  153 => 59,  151 => 58,  147 => 56,  139 => 52,  137 => 51,  133 => 49,  127 => 47,  125 => 46,  120 => 44,  115 => 43,  111 => 42,  94 => 27,  85 => 20,  83 => 19,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Mes paiements - {{ parent() }}
{% endblock %}

{% block header_submenu %}
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        {% if paiements|length <= 0 %}
                            <div class=\"notifications-block\">
                                <div class=\"notifications-header\">Mes paiements</div>
                                <div class=\"notifications-content\">
                                    Aucun paiement trouvé !
                                </div>
                            </div>
                        {% else %}
                            <div class=\"notifications-block\">
                                <div class=\"notifications-header\">Mes réservations</div>
                                <div class=\"notifications-content\">

                                    <table class=\"table table-bordered table-stripped\">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Montant</th>
                                            <th>Facture</th>
                                            <th>Reservation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for paiement in paiements %}
                                            <td>{{ paiement.date | date(\"d/m/Y\") }}</td>
                                            <td>{{ paiement.mode }}</td>
                                            <td>
                                                {% if paiement.facture is not null %}
                                                    {{ paiement.facture.montant }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if paiement.facture is not null %}
                                                    <a href=\"{{ paiement.facture.fileName }}\">
                                                        <i class=\"fa fa-file-pdf-o\"></i>
                                                    </a>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if paiement.facture is not null %}
                                                    {{ paiement.facture.reservation.id }}
                                                {% endif %}
                                            </td>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        {% endif %}

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}";
    }
}
