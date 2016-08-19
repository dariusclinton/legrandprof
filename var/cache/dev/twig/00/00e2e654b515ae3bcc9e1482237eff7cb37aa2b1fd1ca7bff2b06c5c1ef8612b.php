<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ceb57f991d553da324317333346662eff21ca55565e593265bca1c40b02bb345 extends Twig_Template
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
        $__internal_df4ed22cb1fd37253aec48aa693aac9d2cfd69a308b0e000a939da1bac963779 = $this->env->getExtension("native_profiler");
        $__internal_df4ed22cb1fd37253aec48aa693aac9d2cfd69a308b0e000a939da1bac963779->enter($__internal_df4ed22cb1fd37253aec48aa693aac9d2cfd69a308b0e000a939da1bac963779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_df4ed22cb1fd37253aec48aa693aac9d2cfd69a308b0e000a939da1bac963779->leave($__internal_df4ed22cb1fd37253aec48aa693aac9d2cfd69a308b0e000a939da1bac963779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
