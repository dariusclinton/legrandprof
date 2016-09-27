<?php

/* LGPCoreBundle:Lgp:how.html.twig */
class __TwigTemplate_1b35ef113e7fe53e13144638f1d64a8f017e6e37a7fdeca2a236224c44397fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCoreBundle:Lgp:how.html.twig", 2);
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
        $__internal_e51b2889da68f5d339b13cfafe96d1e6b3090af62511ca73e9d92162dfcb9649 = $this->env->getExtension("native_profiler");
        $__internal_e51b2889da68f5d339b13cfafe96d1e6b3090af62511ca73e9d92162dfcb9649->enter($__internal_e51b2889da68f5d339b13cfafe96d1e6b3090af62511ca73e9d92162dfcb9649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:how.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51b2889da68f5d339b13cfafe96d1e6b3090af62511ca73e9d92162dfcb9649->leave($__internal_e51b2889da68f5d339b13cfafe96d1e6b3090af62511ca73e9d92162dfcb9649_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5fdeabeb00fe77d0c1b425ed3f3b781ccbe00bd331666c8538a7100a2f1744 = $this->env->getExtension("native_profiler");
        $__internal_5a5fdeabeb00fe77d0c1b425ed3f3b781ccbe00bd331666c8538a7100a2f1744->enter($__internal_5a5fdeabeb00fe77d0c1b425ed3f3b781ccbe00bd331666c8538a7100a2f1744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Comment ça marche ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5a5fdeabeb00fe77d0c1b425ed3f3b781ccbe00bd331666c8538a7100a2f1744->leave($__internal_5a5fdeabeb00fe77d0c1b425ed3f3b781ccbe00bd331666c8538a7100a2f1744_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f75cec5ac79557d3622e07ae347c426005840f08b6662b9b6d176acfb70e7471 = $this->env->getExtension("native_profiler");
        $__internal_f75cec5ac79557d3622e07ae347c426005840f08b6662b9b6d176acfb70e7471->enter($__internal_f75cec5ac79557d3622e07ae347c426005840f08b6662b9b6d176acfb70e7471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

            <div class=\"container\">

                    <div class=\"row\">

                            <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                                    <h1 class=\"hero-title\" style=\"line-height:120px;\">Comment ca marche ?</h1>

                            </div>

                    </div>

            </div>

    </div>
    <!-- end Page title -->

    <section class=\"overflow-hidden why-us-half-image-wrapper\" style=\"margin-top:-20px;text-align:center\">

            <div class=\"GridLex-grid-noGutter-equalHeight\">

                    <div class=\"GridLex-col-8_sm-12 col-md-offset-2\">

                            <div class=\"why-us-half-image-content\">

                                    <div class=\"section-title text-center\">

                                            <h3>Comment ca marche ?</h3>
                                            <p>Une procédure simple et rapide !</p>

                                    </div>

                                    <div class=\"featured-item\">

                                            <h4>Entrez le domaine qui vous interesse</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-search\"></i>
                                                    </div>

                                                    <p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>

                                            </div>
                                    </div>

                                    <div class=\"featured-item\">

                                            <h4>Trouvez le grand prof idéal</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-like\"></i>
                                                    </div>

                                                    <p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>

                                            </div>
                                    </div>


                                    <div class=\"featured-item\">

                                            <h4>Une fois trouvé, Entrez en contact</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-call\"></i>
                                                    </div>

                                                    <p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>

                                            </div>
                                    </div>

                            </div>

                    </div>



            </div>

    </section>
    
";
        
        $__internal_f75cec5ac79557d3622e07ae347c426005840f08b6662b9b6d176acfb70e7471->leave($__internal_f75cec5ac79557d3622e07ae347c426005840f08b6662b9b6d176acfb70e7471_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle:Lgp:how.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  57 => 10,  51 => 9,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Comment ça marche ? - {{ parent() }}
{% endblock %}


{% block body %}
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

            <div class=\"container\">

                    <div class=\"row\">

                            <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                                    <h1 class=\"hero-title\" style=\"line-height:120px;\">Comment ca marche ?</h1>

                            </div>

                    </div>

            </div>

    </div>
    <!-- end Page title -->

    <section class=\"overflow-hidden why-us-half-image-wrapper\" style=\"margin-top:-20px;text-align:center\">

            <div class=\"GridLex-grid-noGutter-equalHeight\">

                    <div class=\"GridLex-col-8_sm-12 col-md-offset-2\">

                            <div class=\"why-us-half-image-content\">

                                    <div class=\"section-title text-center\">

                                            <h3>Comment ca marche ?</h3>
                                            <p>Une procédure simple et rapide !</p>

                                    </div>

                                    <div class=\"featured-item\">

                                            <h4>Entrez le domaine qui vous interesse</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-search\"></i>
                                                    </div>

                                                    <p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>

                                            </div>
                                    </div>

                                    <div class=\"featured-item\">

                                            <h4>Trouvez le grand prof idéal</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-like\"></i>
                                                    </div>

                                                    <p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>

                                            </div>
                                    </div>


                                    <div class=\"featured-item\">

                                            <h4>Une fois trouvé, Entrez en contact</h4>

                                            <div class=\"content clearfix\">

                                                    <div class=\"icon\">
                                                            <i class=\"pe-7s-call\"></i>
                                                    </div>

                                                    <p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>

                                            </div>
                                    </div>

                            </div>

                    </div>



            </div>

    </section>
    
{% endblock %}";
    }
}
