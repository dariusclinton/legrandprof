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
        $__internal_ea59289ab35bb5fc4480506e145164a12b8bc2170546ce73c908dc3a5e5426e7 = $this->env->getExtension("native_profiler");
        $__internal_ea59289ab35bb5fc4480506e145164a12b8bc2170546ce73c908dc3a5e5426e7->enter($__internal_ea59289ab35bb5fc4480506e145164a12b8bc2170546ce73c908dc3a5e5426e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:how.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea59289ab35bb5fc4480506e145164a12b8bc2170546ce73c908dc3a5e5426e7->leave($__internal_ea59289ab35bb5fc4480506e145164a12b8bc2170546ce73c908dc3a5e5426e7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4a2aa9df6cab988495b31cc4211bf10ad3d3e15f37a3a0bd590d36e882eda0e = $this->env->getExtension("native_profiler");
        $__internal_f4a2aa9df6cab988495b31cc4211bf10ad3d3e15f37a3a0bd590d36e882eda0e->enter($__internal_f4a2aa9df6cab988495b31cc4211bf10ad3d3e15f37a3a0bd590d36e882eda0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Comment ça marche ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4a2aa9df6cab988495b31cc4211bf10ad3d3e15f37a3a0bd590d36e882eda0e->leave($__internal_f4a2aa9df6cab988495b31cc4211bf10ad3d3e15f37a3a0bd590d36e882eda0e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4d33672cd332fb845982c7af7b17ccd0401dfb5870d7dcb337c5a89635f7bd = $this->env->getExtension("native_profiler");
        $__internal_5e4d33672cd332fb845982c7af7b17ccd0401dfb5870d7dcb337c5a89635f7bd->enter($__internal_5e4d33672cd332fb845982c7af7b17ccd0401dfb5870d7dcb337c5a89635f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e4d33672cd332fb845982c7af7b17ccd0401dfb5870d7dcb337c5a89635f7bd->leave($__internal_5e4d33672cd332fb845982c7af7b17ccd0401dfb5870d7dcb337c5a89635f7bd_prof);

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
