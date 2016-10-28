<?php

/* LGPUserBundle:Cours:formulaire.html.twig */
class __TwigTemplate_c22210196c31ba6992f58332a9380a0013d488305f421348b91132db92e078f1 extends Twig_Template
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

<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'label', array("label_attr" => array(), "label" => "Niveau :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez un niveau")));
        echo "</div>
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'label', array("label_attr" => array(), "label" => "Prix /mois :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez le prix d'un mois")));
        echo "</div>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'label', array("label_attr" => array(), "label" => "Intitulé du cours :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'widget', array("attr" => array("class" => "select2-multi form-control ")));
        echo "</div>
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
</div>
  <br>
";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  76 => 25,  66 => 18,  62 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  38 => 8,  34 => 7,  30 => 6,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
