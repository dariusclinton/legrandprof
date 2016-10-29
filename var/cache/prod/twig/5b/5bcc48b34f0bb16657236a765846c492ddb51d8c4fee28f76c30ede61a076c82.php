<?php

/* LGPUserBundle:Registration:prof.form.html.twig */
class __TwigTemplate_b0d08db3d588d2c68e8b6fceee44ce8b18b6fb716f0737f13aaa2ee75f4d4fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Registration:prof.form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Création de compte prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/01.1.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1\">
                                <div class=\"left\">
                                        <h3 class=\"hero-title-register\">Devenez un grand prof<br> </h3><h4 class=\"hero-subtitle-register\">Et faites grandir vos élèves.</h4>
                                        <p class=\"lead-register\">
                                        Tout le monde a quelque chose à partager ou à enseigner.
                                        Chez Legrandprof vous pouvez donner des cours particuliers dans des tonnes matières (langues, sports, musique, arts, loisirs, soutien scolaire).</p>
                                </div>

                        </div>
                        <div class=\"col-sm-3 col-md-offset-1 col-sm-offset-1 col-md-3\">
                                
                            
                            <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_prof_registration");
        echo "\" method=\"POST\">
                                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                                <div class=\"form-group\">
                                  ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo "
                                  ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenoms", array()), 'widget', array("attr" => array("placeholder" => "Prénoms", "class" => "form-control")));
        echo "
                                  ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenoms", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 46
        echo "
                                <div class=\"form-group\">
                                  ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'errors');
        echo "
                                </div>

                               ";
        // line 57
        echo "
                                <div class=\"form-group\">
                                 ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                  ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("placeholder" => "Adresse email", "class" => "form-control")));
        echo "
                                  ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                                </div>

                                <div class=\"form-group\">
                                  ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "children", array()), "first", array(), "array"), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'errors');
        echo "
                                </div>
                                
                                <div class=\"form-group\">
                                  ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "children", array()), "second", array(), "array"), 'widget', array("attr" => array("placeholder" => "Confirmation Mot de passe", "class" => "form-control")));
        echo "
                                  ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'errors');
        echo "
                                </div>

                                ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enregistrez", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </form>
                        </div>

                </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->

    <div class=\"post-hero bg-light\" style=\"margin-top:60px;margin-bottom:60px;\">

        <div class=\"container\">

                <div class=\"row\">

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"><i class=\"pe-7s-world\"></i></div>
                                        <div class=\"content\">
                                                <h6>Enseignez à un plus grand nombre</h6>
                                                <span>Selon votre expérience et votre disponibilité, partagez vos connaissances avec un grand nombre !</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-map-marker\"></i></div>
                                        <div class=\"content\">
                                                <h6>Près de chez vous</h6>
                                                <span>Vous ne recevrez que des demandes de personnes près de chez vous.</span>
                                        </div>
                                </div>
                        </div>

                        <div class=\"col-sm-4\">
                                <div class=\"featured-count clearfix\">
                                        <div class=\"icon\"> <i class=\"pe-7s-cash\"></i></div>
                                        <div class=\"content\">
                                                <h6>En fixant votre prix</h6>
                                                <span> Fixez vos prix pour chaque matière et pack de matières !</span>
                                        </div>
                                </div>
                        </div>

                </div>

        </div>

    </div>
    
    
    

    
";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Registration:prof.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  160 => 78,  154 => 75,  150 => 74,  143 => 70,  139 => 69,  132 => 65,  128 => 64,  121 => 60,  117 => 59,  113 => 57,  107 => 49,  103 => 48,  99 => 46,  93 => 38,  89 => 37,  82 => 33,  78 => 32,  72 => 29,  68 => 28,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
