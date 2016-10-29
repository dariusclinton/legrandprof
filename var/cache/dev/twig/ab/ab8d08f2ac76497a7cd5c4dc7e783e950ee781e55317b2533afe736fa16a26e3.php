<?php

/* LGPReservationBundle:Reservation:paiement.html.twig */
class __TwigTemplate_21ec70ef40f1ea02986a15cdc9114bab2c97e88583c3fa58e3cdfaaa5c32f61b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Reservation:paiement.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64610a405dd9625bdab487da5958cf15b705532c6ae797b59705db3a399b5a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64610a405dd9625bdab487da5958cf15b705532c6ae797b59705db3a399b5a56->enter($__internal_64610a405dd9625bdab487da5958cf15b705532c6ae797b59705db3a399b5a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64610a405dd9625bdab487da5958cf15b705532c6ae797b59705db3a399b5a56->leave($__internal_64610a405dd9625bdab487da5958cf15b705532c6ae797b59705db3a399b5a56_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e142b026a003aae3153b015166e5a46dac48e00b0dc3efd1eeb42c6a5417cdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e142b026a003aae3153b015166e5a46dac48e00b0dc3efd1eeb42c6a5417cdc2->enter($__internal_e142b026a003aae3153b015166e5a46dac48e00b0dc3efd1eeb42c6a5417cdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e142b026a003aae3153b015166e5a46dac48e00b0dc3efd1eeb42c6a5417cdc2->leave($__internal_e142b026a003aae3153b015166e5a46dac48e00b0dc3efd1eeb42c6a5417cdc2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba9e8b556cedb65f660a7af974f90e2dfbcbfcd7b13ef8e96569d69f58426ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e8b556cedb65f660a7af974f90e2dfbcbfcd7b13ef8e96569d69f58426ec0->enter($__internal_ba9e8b556cedb65f660a7af974f90e2dfbcbfcd7b13ef8e96569d69f58426ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            ";
        // line 11
        $this->loadTemplate("LGPReservationBundle:Reservation:etapes.html.twig", "LGPReservationBundle:Reservation:paiement.html.twig", 11)->display($context);
        // line 12
        echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Choisissez votre fréquence de paiement</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 text-center\">
                        <form action=\"\" method=\"POST\" role=\"form\" id=\"paiementForm\">            
                            <div class=\"form-group\">
                               <select name=\"paiement-frequence\" id=\"paiement-frequence\" class=\"form-control\" required>
                                <option value=\"\" disabled=\"disabled\" selected>Choisissez la fréquence de paiement</option>
                                <option value=\"hebdomadaire\">Hebdomadaire</option>
                                <option value=\"mensuelle\">Mensuelle</option>
                                <option value=\"trimestrielle\">Trimestrielle</option>
                                <option value=\"semestrielle\">Semestrielle</option>
                               </select>
                            </div>
                            <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
";
        
        $__internal_ba9e8b556cedb65f660a7af974f90e2dfbcbfcd7b13ef8e96569d69f58426ec0->leave($__internal_ba9e8b556cedb65f660a7af974f90e2dfbcbfcd7b13ef8e96569d69f58426ec0_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    mode de paiment  - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            {% include 'LGPReservationBundle:Reservation:etapes.html.twig' %}

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Choisissez votre fréquence de paiement</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 text-center\">
                        <form action=\"\" method=\"POST\" role=\"form\" id=\"paiementForm\">            
                            <div class=\"form-group\">
                               <select name=\"paiement-frequence\" id=\"paiement-frequence\" class=\"form-control\" required>
                                <option value=\"\" disabled=\"disabled\" selected>Choisissez la fréquence de paiement</option>
                                <option value=\"hebdomadaire\">Hebdomadaire</option>
                                <option value=\"mensuelle\">Mensuelle</option>
                                <option value=\"trimestrielle\">Trimestrielle</option>
                                <option value=\"semestrielle\">Semestrielle</option>
                               </select>
                            </div>
                            <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
{% endblock %}

";
    }
}
