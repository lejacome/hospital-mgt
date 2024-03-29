<?php

/**
 * FrontDesk actions.
 *
 * @package    hospital
 * @subpackage FrontDesk
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class FrontDeskActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  } // -- END executeIndex
  
  public function executeDutyRoster(sfWebRequest $request)
  {
    $c = new Criteria();
	$c->add(DutyRosterPeer::STATUS, Constant::RECORD_STATUS_DELETED, Criteria::NOT_EQUAL);
	$c->add(DutyRosterPeer::DUTY_DATE, date('Y-m-d'));
	$c->addAscendingOrderByColumn(DutyRosterPeer::EMPLOYEE_ID);
	$this->dutys = DutyRosterPeer::doSelect($c);
	
  } // -- END executeDutyRoster
  
  public function executeAddDuty(sfWebRequest $request)
  {
    if ($request->isMethod('POST'))
	{
		$duty = new DutyRoster();
		
		$duty->setEmployeeId($this->getRequestParameter('employee_id'));
		$duty->setDutyPlaceId($this->getRequestParameter('duty_place_id'));
		$duty->setDutyDate($this->getRequestParameter('duty_date'));
		$duty->setFrom($this->getRequestParameter('from'));
		$duty->setTo($this->getRequestParameter('to'));
		$duty->setSubstituteId($this->getRequestParameter('substitute_id'));
		$duty->setStatus(Constant::RECORD_STATUS_ACTIVE);
		
		$duty->save();
		
		$this->getUser ()->setFlash ( 'SUCCESS_MESSAGE', 'Duty for the Staff Member assigned Successfully.' );
		$this->redirect('FrontDesk/dutyRoster');
	}
  } // -- END executeAddDuty
  
  public function executeEditDuty (sfWebRequest $request)
	{
		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
			//Create User and set object attributes
			$duty = DutyRosterPeer::retrieveByPk($this->getRequestParameter('id'));

			$duty->setEmployeeId($this->getRequestParameter('employee_id'));
			$duty->setDutyPlaceId($this->getRequestParameter('duty_place_id'));
			$duty->setDutyDate($this->getRequestParameter('duty_date'));
			$duty->setFrom($this->getRequestParameter('from'));
			$duty->setTo($this->getRequestParameter('to'));
			$duty->setSubstituteId($this->getRequestParameter('substitute_id'));
			//Save object to database
			if($duty->save())
			{
				$this->getUser()->setFlash('SUCCESS_MESSAGE', Constant::RECORD_EDITED_SUCCESSFULLY);
			$this->redirect ('FrontDesk/dutyRoster');
			}
			else
			{
				$this->getUser()->setFlash('ERROR_MESSAGE', Constant::DB_ERROR);
				$this->redirect('FrontDesk/editduty?id='.Utility::EncryptQueryString($request->getParameter('id')));
			}
		}

		else
		{
			$this->duty = DutyRosterPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('id')));
		}
	} //- END - executeEditDuty
  
  
  public function executeDeleteDuty (sfWebRequest $request)
	{

		$duty = DutyRosterPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('id')));

		if($duty)
		{
			$duty->setStatus(Constant::RECORD_STATUS_DELETED);
			if(	$duty->save())
			$this->getUser()->setFlash('SUCCESS_MESSAGE', Constant::RECORD_STATUS_DELETED_SUCCESSFULLY);
			else
			$this->getUser()->setFlash('ERROR_MESSAGE', Constant::DB_ERROR);

		}
		else
		{
			$this->getUser()->setFlash('ERROR_MESSAGE', Constant::INVALID_REQUEST);
		}
	
		$this->redirect ('FrontDesk/dutyRoster');

	} //- END - executeDelete
	
public function executeVisitList(sfWebRequest $request)
  {
    $c = new Criteria();
	$c->add(VisitPeer::STATUS, Constant::RECORD_STATUS_DELETED, Criteria::NOT_EQUAL);
	$c->add(VisitPeer::VISIT_DATE, date('Y-m-d'));
	$c->addAscendingOrderByColumn(VisitPeer::ID);
	$this->visits = VisitPeer::doSelect($c);
  } // -- END executeVisitList
  
  public function executeSearchPatient(sfWebRequest $request)
  {
    //$patient_id = $this->getRequestParameter('id');
	$patient_name = $this->getRequestParameter('name');
	
    $c = new Criteria();
		//$c->add(PatientPeer::STATUS, Constant::RECORD_STATUS_ACTIVE);
		/*$c1 = $c->getNewCriterion(PatientPeer::NAME, '%'.$patient_name.'%' , Criteria::LIKE);
		$c2 = $c->getNewCriterion(PatientPeer::ID, $patient_id, Criteria::EQUAL);
		$c1->addOr($c2);
		$c->add($c1);*/
		$c->add(PatientPeer::NAME, '%'.$patient_name.'%' , Criteria::LIKE);
		$this->patients = PatientPeer::doSelect($c);
	
  } // -- END executeVisitList
  
  public function executeVisitAdd(sfWebRequest $request)
  {
    if ($request->isMethod('POST'))
	{
		$visit = new Visit();
		
		$visit->setPatientId($this->getRequestParameter('patient_id'));
		
		if ($this->getRequestParameter('doctor_id')) $visit->setDoctorId($this->getRequestParameter('doctor_id'));
		if ($this->getRequestParameter('ward_doc_id')) $visit->setWardDocId($this->getRequestParameter('ward_doc_id'));
		if ($this->getRequestParameter('ward_bed_id')) $visit->setWardBedId($this->getRequestParameter('ward_bed_id'));
		if ($this->getRequestParameter('room_id')) $visit->setRoomId($this->getRequestParameter('room_id'));
		if ($this->getRequestParameter('admit_date')) $visit->setAdmitDate($this->getRequestParameter('admit_date'));
		$visit->setVisitDate($this->getRequestParameter('visit_date'));
		$visit->setTime($this->getRequestParameter('time'));
		$visit->setVisitType($this->getRequestParameter('visit_type'));
		$visit->setStatus(Constant::VISIT_PENDING);
		
		$visit->save();
		
		$this->getUser ()->setFlash ( 'SUCCESS_MESSAGE', 'Visit to Doctor added Successfully.' );
		$this->redirect('FrontDesk/visitList');
	}
	
	else
	{
	$this->patient = PatientPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('patient')));
	}
  } // -- END executeVisitAdd
  
    public function executeVisitEdit(sfWebRequest $request)
  {
    if ($request->isMethod('POST'))
	{
		$visit = VisitPeer::retrieveByPk($this->getRequestParameter('visit_id'));
		
		if ($this->getRequestParameter('doctor_id')) $visit->setDoctorId($this->getRequestParameter('doctor_id'));
		if ($this->getRequestParameter('ward_doc_id')) $visit->setWardDocId($this->getRequestParameter('ward_doc_id'));
		if ($this->getRequestParameter('ward_bed_id')) $visit->setWardBedId($this->getRequestParameter('ward_bed_id'));
		if ($this->getRequestParameter('room_id')) $visit->setRoomId($this->getRequestParameter('room_id'));
		if ($this->getRequestParameter('admit_date')) $visit->setAdmitDate($this->getRequestParameter('admit_date'));
		$visit->setVisitDate($this->getRequestParameter('visit_date'));
		$visit->setTime($this->getRequestParameter('time'));
		$visit->setVisitType($this->getRequestParameter('visit_type'));
		
		$visit->save();
		
		$this->getUser ()->setFlash ( 'SUCCESS_MESSAGE', 'Visit to Doctor edited Successfully.' );
		$this->redirect('FrontDesk/visitList');
	}
	
	else
	{
	$this->visit = VisitPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('visit')));
	}
  } // -- END executeVisitEdit


public function executePayVisitFee(sfWebRequest $request)
  {
    
	
	$visit = VisitPeer::retrieveByPk(Utility::DecryptqueryString($request->getParameter('visit')));
	
	$visit->setFeePaid(Constant::VISIT_FEE_PAID);
	$visit->save();
		
		$this->getUser()->setFlash('SUCCESS_MESSAGE', 'Fee Paid for the visit Successfully');
		$this->redirect ('FrontDesk/visitList');
	
  }// END executePayVisitFee

public function executeVisitPrevious(sfWebRequest $request)
  {
    if($request->isMethod('POST'))
		{
		
		$this->flag = true;
		$visit_date = $this->getRequestParameter('visit_date');
		
		$c = new Criteria();
		$c->add(VisitPeer::STATUS, Constant::RECORD_STATUS_DELETED, Criteria::NOT_EQUAL);
		$c->add(VisitPeer::VISIT_DATE, $visit_date);
		$c->addAscendingOrderByColumn(VisitPeer::ID);
		$this->visits = VisitPeer::doSelect($c);
		}
	else
		{
		$this->flag = false;
		}// end else
  } // -- END executeVisitList
  
public function executeVisitDetail(sfWebRequest $request)
  {
		$this->visit = VisitPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('visit')));
		
		$visit = VisitPeer::retrieveByPk(Utility::DecryptQueryString($request->getParameter('visit')));
		$visit_id = $visit->getId();
		
		$c = new Criteria();
		//$c->add(LabReportPeer::STATUS, Constant::RECORD_STATUS_DELETED, Criteria::NOT_EQUAL);
		$c->add(LabReportPeer::VISIT_ID, $visit_id);
		$this->tests = LabReportPeer::doSelect($c);
		
		$d = new Criteria();
		//$d->add(VisitMedicinePeer::STATUS, Constant::RECORD_STATUS_DELETED, Criteria::NOT_EQUAL);
		$d->add(VisitMedicinePeer::VISIT_ID, $visit_id);
		$this->medicines = VisitMedicinePeer::doSelect($d);
		
  } // -- END executeVisitDetail

} // END Class
