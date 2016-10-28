<?php

/* LGPCoreBundle:Lgp:how.html.twig */
class __TwigTemplate_3ae4d786b649b9144c43fc32dd6ba5d46b2a842dc4f5f495692eb1644b2bf68d extends Twig_Template
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
        $__internal_6f4c568fcec2ecefe96762196e2c3e137b20ef8c5dbcf5c13397a0731cac3723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4c568fcec2ecefe96762196e2c3e137b20ef8c5dbcf5c13397a0731cac3723->enter($__internal_6f4c568fcec2ecefe96762196e2c3e137b20ef8c5dbcf5c13397a0731cac3723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:how.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4c568fcec2ecefe96762196e2c3e137b20ef8c5dbcf5c13397a0731cac3723->leave($__internal_6f4c568fcec2ecefe96762196e2c3e137b20ef8c5dbcf5c13397a0731cac3723_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bfe29960c9c3354214f60d3065ddd2c9c676796e99beaea90ca25b1ec53c8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfe29960c9c3354214f60d3065ddd2c9c676796e99beaea90ca25b1ec53c8b8->enter($__internal_3bfe29960c9c3354214f60d3065ddd2c9c676796e99beaea90ca25b1ec53c8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Comment ça marche ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3bfe29960c9c3354214f60d3065ddd2c9c676796e99beaea90ca25b1ec53c8b8->leave($__internal_3bfe29960c9c3354214f60d3065ddd2c9c676796e99beaea90ca25b1ec53c8b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_210ebd50b08b24b6d919a515dbf9052049aae2da98e06fb9c3eb69c466c1adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210ebd50b08b24b6d919a515dbf9052049aae2da98e06fb9c3eb69c466c1adec->enter($__internal_210ebd50b08b24b6d919a515dbf9052049aae2da98e06fb9c3eb69c466c1adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
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
        
        $__internal_210ebd50b08b24b6d919a515dbf9052049aae2da98e06fb9c3eb69c466c1adec->leave($__internal_210ebd50b08b24b6d919a515dbf9052049aae2da98e06fb9c3eb69c466c1adec_prof);

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
