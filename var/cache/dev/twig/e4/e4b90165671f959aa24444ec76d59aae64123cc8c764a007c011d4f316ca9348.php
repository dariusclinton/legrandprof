<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b915c27cc4d3e3ce039f98c8aead46bb82f95721cb1cdd515aa05bedcc9978b extends Twig_Template
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
        $__internal_cda0e11cb4d59a786277f4fece19cf721cdf6891cd5bab6f975129a235c64d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda0e11cb4d59a786277f4fece19cf721cdf6891cd5bab6f975129a235c64d99->enter($__internal_cda0e11cb4d59a786277f4fece19cf721cdf6891cd5bab6f975129a235c64d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cda0e11cb4d59a786277f4fece19cf721cdf6891cd5bab6f975129a235c64d99->leave($__internal_cda0e11cb4d59a786277f4fece19cf721cdf6891cd5bab6f975129a235c64d99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
