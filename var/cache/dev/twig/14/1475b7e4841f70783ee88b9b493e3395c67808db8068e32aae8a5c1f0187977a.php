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
        $__internal_7e692f4a66efd00f3db8ce59ae6e7b23ce121332acde72245876e9e45eefb9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e692f4a66efd00f3db8ce59ae6e7b23ce121332acde72245876e9e45eefb9e2->enter($__internal_7e692f4a66efd00f3db8ce59ae6e7b23ce121332acde72245876e9e45eefb9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e692f4a66efd00f3db8ce59ae6e7b23ce121332acde72245876e9e45eefb9e2->leave($__internal_7e692f4a66efd00f3db8ce59ae6e7b23ce121332acde72245876e9e45eefb9e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_273f40f04b1e11c416db30fc67cd51e676d5f01b47818b1f60e296c7faf2a635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273f40f04b1e11c416db30fc67cd51e676d5f01b47818b1f60e296c7faf2a635->enter($__internal_273f40f04b1e11c416db30fc67cd51e676d5f01b47818b1f60e296c7faf2a635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes paiements - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_273f40f04b1e11c416db30fc67cd51e676d5f01b47818b1f60e296c7faf2a635->leave($__internal_273f40f04b1e11c416db30fc67cd51e676d5f01b47818b1f60e296c7faf2a635_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5db630ae3e7361e57560e7b0c263ae089fd42463ce737420d39f075198e274ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db630ae3e7361e57560e7b0c263ae089fd42463ce737420d39f075198e274ad->enter($__internal_5db630ae3e7361e57560e7b0c263ae089fd42463ce737420d39f075198e274ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5db630ae3e7361e57560e7b0c263ae089fd42463ce737420d39f075198e274ad->leave($__internal_5db630ae3e7361e57560e7b0c263ae089fd42463ce737420d39f075198e274ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66017a12bf0e4ed6ae68694b328e939fc5a78e570df1a6de02e247e8e403d2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66017a12bf0e4ed6ae68694b328e939fc5a78e570df1a6de02e247e8e403d2cc->enter($__internal_66017a12bf0e4ed6ae68694b328e939fc5a78e570df1a6de02e247e8e403d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66017a12bf0e4ed6ae68694b328e939fc5a78e570df1a6de02e247e8e403d2cc->leave($__internal_66017a12bf0e4ed6ae68694b328e939fc5a78e570df1a6de02e247e8e403d2cc_prof);

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
