<?php

/* LGPUserBundle:Anomalie:formulaire.html.twig */
class __TwigTemplate_e9c83fec92fe11507cce4846c521bc6228a9590d17926a38d783102b23ddb2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objet", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Objet de l'anomalie"));
        echo "</div>
        <div class='col-md-4'>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objet", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Contenu"));
        echo "</div>
        <div class='col-md-4'>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'errors');
        echo "
    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  63 => 21,  56 => 17,  52 => 16,  48 => 15,  39 => 9,  35 => 8,  31 => 7,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
