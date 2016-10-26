<?php

/* LGPUserBundle:Paiement:index.html.twig */
class __TwigTemplate_2b1cf7135f09f5e12e751c6ccbc0f681ff9b31cd6fa4a9190aafae7d49ef47a7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Mes paiements - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["paiements"]) ? $context["paiements"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) ? $context["paiements"] : null));
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
        return array (  153 => 69,  145 => 63,  138 => 61,  132 => 59,  130 => 58,  126 => 56,  118 => 52,  116 => 51,  112 => 49,  106 => 47,  104 => 46,  99 => 44,  94 => 43,  90 => 42,  73 => 27,  64 => 20,  62 => 19,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
