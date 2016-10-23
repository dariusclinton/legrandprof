<?php

/* LGPUserBundle:Paiement:index.html.twig */
class __TwigTemplate_5ca06e3a943dc003c98484ca99536fe49c34045808bac3a2cbafbce217529b9d extends Twig_Template
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
        $__internal_4e1360e038b81bda64d6ebcbeedd22dd206ac6b1ebbf1023016d3f0d9d683dcf = $this->env->getExtension("native_profiler");
        $__internal_4e1360e038b81bda64d6ebcbeedd22dd206ac6b1ebbf1023016d3f0d9d683dcf->enter($__internal_4e1360e038b81bda64d6ebcbeedd22dd206ac6b1ebbf1023016d3f0d9d683dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Paiement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1360e038b81bda64d6ebcbeedd22dd206ac6b1ebbf1023016d3f0d9d683dcf->leave($__internal_4e1360e038b81bda64d6ebcbeedd22dd206ac6b1ebbf1023016d3f0d9d683dcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b394a83f1d0dfe08225f342443daaa005a9c92b7786f8f24ccdf50e1d01ea4ba = $this->env->getExtension("native_profiler");
        $__internal_b394a83f1d0dfe08225f342443daaa005a9c92b7786f8f24ccdf50e1d01ea4ba->enter($__internal_b394a83f1d0dfe08225f342443daaa005a9c92b7786f8f24ccdf50e1d01ea4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes paiements - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b394a83f1d0dfe08225f342443daaa005a9c92b7786f8f24ccdf50e1d01ea4ba->leave($__internal_b394a83f1d0dfe08225f342443daaa005a9c92b7786f8f24ccdf50e1d01ea4ba_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_03be157d270dec2cfdb038c2da22d365d3a43df3fa876c0c3a40a4d4633f177c = $this->env->getExtension("native_profiler");
        $__internal_03be157d270dec2cfdb038c2da22d365d3a43df3fa876c0c3a40a4d4633f177c->enter($__internal_03be157d270dec2cfdb038c2da22d365d3a43df3fa876c0c3a40a4d4633f177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_03be157d270dec2cfdb038c2da22d365d3a43df3fa876c0c3a40a4d4633f177c->leave($__internal_03be157d270dec2cfdb038c2da22d365d3a43df3fa876c0c3a40a4d4633f177c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0fee42ed0d774c1531a14c8b048e2db9ad3d43ccab9a0a4d41ee6cb598b8ec4 = $this->env->getExtension("native_profiler");
        $__internal_f0fee42ed0d774c1531a14c8b048e2db9ad3d43ccab9a0a4d41ee6cb598b8ec4->enter($__internal_f0fee42ed0d774c1531a14c8b048e2db9ad3d43ccab9a0a4d41ee6cb598b8ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0fee42ed0d774c1531a14c8b048e2db9ad3d43ccab9a0a4d41ee6cb598b8ec4->leave($__internal_f0fee42ed0d774c1531a14c8b048e2db9ad3d43ccab9a0a4d41ee6cb598b8ec4_prof);

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
