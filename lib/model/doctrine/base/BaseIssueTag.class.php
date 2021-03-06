<?php

/**
 * BaseIssueTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $issue_id
 * @property integer $tag_id
 * @property Issue $Issues
 * @property Tag $Tags
 * 
 * @method integer  getIssueId()  Returns the current record's "issue_id" value
 * @method integer  getTagId()    Returns the current record's "tag_id" value
 * @method Issue    getIssues()   Returns the current record's "Issues" value
 * @method Tag      getTags()     Returns the current record's "Tags" value
 * @method IssueTag setIssueId()  Sets the current record's "issue_id" value
 * @method IssueTag setTagId()    Sets the current record's "tag_id" value
 * @method IssueTag setIssues()   Sets the current record's "Issues" value
 * @method IssueTag setTags()     Sets the current record's "Tags" value
 * 
 * @package    skeleton
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIssueTag extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('issue_tag');
        $this->hasColumn('issue_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tag_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Issue as Issues', array(
             'local' => 'issue_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tag as Tags', array(
             'local' => 'tag_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}