<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b8185aa0aa754706ca74344c6c1c6a7cd8dd27d5f04f9bfa71f869574632312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7138802ac39323e906305b31dd09df1556aecc3dce02201324f7034956e68c = $this->env->getExtension("native_profiler");
        $__internal_1a7138802ac39323e906305b31dd09df1556aecc3dce02201324f7034956e68c->enter($__internal_1a7138802ac39323e906305b31dd09df1556aecc3dce02201324f7034956e68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a7138802ac39323e906305b31dd09df1556aecc3dce02201324f7034956e68c->leave($__internal_1a7138802ac39323e906305b31dd09df1556aecc3dce02201324f7034956e68c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8dc1bcb259e8a59eb7cc76eef8a5c362aa1807e423401b229a145d614346e2f = $this->env->getExtension("native_profiler");
        $__internal_c8dc1bcb259e8a59eb7cc76eef8a5c362aa1807e423401b229a145d614346e2f->enter($__internal_c8dc1bcb259e8a59eb7cc76eef8a5c362aa1807e423401b229a145d614346e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8dc1bcb259e8a59eb7cc76eef8a5c362aa1807e423401b229a145d614346e2f->leave($__internal_c8dc1bcb259e8a59eb7cc76eef8a5c362aa1807e423401b229a145d614346e2f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
