<?php

namespace app\controllers;


use yii\web\Controller;


class AppController extends Controller
{


    function getCommentsCount($id,$i=0) // Кол-во комментариев
    {

        $connection = \Yii::$app->db;

        $idcomments=41;
        $model = $connection->createCommand("Select id From core_contents where `is_vis`=1 AND `id_unit`='".$idcomments."' AND `pid`='".$id."' order by `date` DESC");
        $data = $model->queryAll();

        if(count($data)>0&&!empty($data)) {
            foreach($data as $dat) {
                if($dat['id']>0) {
                    $i++;
                    $i=$this->getCommentsCount($dat['id'],$i);
                }
            }
        }
        return $i;
    }

}


class CPagination extends Controller
{
    const DEFAULT_PAGE_SIZE=10;
    public $pageVar='page';
    /**
     * @var string the route (controller ID and action ID) for displaying the paged contents.
     * Defaults to empty string, meaning using the current route.
     */
    public $route='';
    /**
     * @var array of parameters (name=>value) that should be used instead of GET when generating pagination URLs.
     * Defaults to null, meaning using the currently available GET parameters.
     */
    public $params;

    public $validateCurrentPage=true;
    private $_pageSize=self::DEFAULT_PAGE_SIZE;
    private $_itemCount=0;
    private $_currentPage;
    /**
     * Constructor.
     * @param integer $itemCount total number of items.
     */
    public function __construct($itemCount=0)
    {
        $this->setItemCount($itemCount);
    }
    /**
     * @return integer number of items in each page. Defaults to 10.
     */
    public function getPageSize()
    {
        return $this->_pageSize;
    }
    /**
     * @param integer $value number of items in each page
     */
    public function setPageSize($value)
    {
        if(($this->_pageSize=$value)<=0)
            $this->_pageSize=self::DEFAULT_PAGE_SIZE;
    }
    /**
     * @return integer total number of items. Defaults to 0.
     */
    public function getItemCount()
    {
        return $this->_itemCount;
    }
    /**
     * @param integer $value total number of items.
     */
    public function setItemCount($value)
    {
        if(($this->_itemCount=$value)<0)
            $this->_itemCount=0;
    }
    /**
     * @return integer number of pages
     */
    public function getPageCount()
    {
        return (int)(($this->_itemCount+$this->_pageSize-1)/$this->_pageSize);
    }
    /**
     * @param boolean $recalculate whether to recalculate the current page based on the page size and item count.
     * @return integer the zero-based index of the current page. Defaults to 0.
     */
    public function getCurrentPage($recalculate=true)
    {
        if($this->_currentPage===null || $recalculate)
        {
            if(isset($_GET[$this->pageVar]))
            {
                $this->_currentPage=(int)$_GET[$this->pageVar]-1;
                if($this->validateCurrentPage)
                {
                    $pageCount=$this->getPageCount();
                    if($this->_currentPage>=$pageCount)
                        $this->_currentPage=$pageCount-1;
                }
                if($this->_currentPage<0)
                    $this->_currentPage=0;
            }
            else
                $this->_currentPage=0;
        }
        return $this->_currentPage;
    }
    /**
     * @param integer $value the zero-based index of the current page.
     */
    public function setCurrentPage($value)
    {
        $this->_currentPage=$value;
        $_GET[$this->pageVar]=$value+1;
    }
    /**
     * Creates the URL suitable for pagination.
     * This method is mainly called by pagers when creating URLs used to
     * perform pagination. The default implementation is to call
     * the controller's createUrl method with the page information.
     * You may override this method if your URL scheme is not the same as
     * the one supported by the controller's createUrl method.
     * @param CController $controller the controller that will create the actual URL
     * @param integer $page the page that the URL should point to. This is a zero-based index.
     * @return string the created URL
     */
    public function createPageUrl($controller,$page)
    {
        $params=$this->params===null ? $_GET : $this->params;
        if($page>0) // page 0 is the default
            $params[$this->pageVar]=$page+1;
        else
            unset($params[$this->pageVar]);
        return $controller->createUrl($this->route,$params);
    }
    /**
     * Applies LIMIT and OFFSET to the specified query criteria.
     * @param CDbCriteria $criteria the query criteria that should be applied with the limit
     */
    public function applyLimit($criteria)
    {
        $criteria->limit=$this->getLimit();
        $criteria->offset=$this->getOffset();
    }
    /**
     * @return integer the offset of the data. This may be used to set the
     * OFFSET value for a SQL statement for fetching the current page of data.
     * @since 1.1.0
     */
    public function getOffset()
    {
        return $this->getCurrentPage()*$this->getPageSize();
    }
    /**
     * @return integer the limit of the data. This may be used to set the
     * LIMIT value for a SQL statement for fetching the current page of data.
     * This returns the same value as {@link pageSize}.
     * @since 1.1.0
     */
    public function getLimit()
    {
        return $this->getPageSize();
    }
}
