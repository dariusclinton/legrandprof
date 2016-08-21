<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c3cbe8835f2ad6e962c9921d1a25475739e1efb360202bcbc159d222e42919 = $this->env->getExtension("native_profiler");
        $__internal_e6c3cbe8835f2ad6e962c9921d1a25475739e1efb360202bcbc159d222e42919->enter($__internal_e6c3cbe8835f2ad6e962c9921d1a25475739e1efb360202bcbc159d222e42919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c3cbe8835f2ad6e962c9921d1a25475739e1efb360202bcbc159d222e42919->leave($__internal_e6c3cbe8835f2ad6e962c9921d1a25475739e1efb360202bcbc159d222e42919_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd7779bb57e46c538f5d0ea2e27a56db4a4164a3f1d8a0a1a3da3b4ba10130b = $this->env->getExtension("native_profiler");
        $__internal_2fd7779bb57e46c538f5d0ea2e27a56db4a4164a3f1d8a0a1a3da3b4ba10130b->enter($__internal_2fd7779bb57e46c538f5d0ea2e27a56db4a4164a3f1d8a0a1a3da3b4ba10130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">
            ";
        // line 8
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "        </div>
    </div>

";
        
        $__internal_2fd7779bb57e46c538f5d0ea2e27a56db4a4164a3f1d8a0a1a3da3b4ba10130b->leave($__internal_2fd7779bb57e46c538f5d0ea2e27a56db4a4164a3f1d8a0a1a3da3b4ba10130b_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_877f86687095679073e531f823ce908af96a024e2d0053e39295eb8fc9679123 = $this->env->getExtension("native_profiler");
        $__internal_877f86687095679073e531f823ce908af96a024e2d0053e39295eb8fc9679123->enter($__internal_877f86687095679073e531f823ce908af96a024e2d0053e39295eb8fc9679123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "
            ";
        
        $__internal_877f86687095679073e531f823ce908af96a024e2d0053e39295eb8fc9679123->leave($__internal_877f86687095679073e531f823ce908af96a024e2d0053e39295eb8fc9679123_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 8,  49 => 11,  46 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-8 col-sm-offset-2">*/
/*             {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*             {% block fos_user_content %}*/
/* */
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
