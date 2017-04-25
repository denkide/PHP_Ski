SELECT
  person.PersonID,
  person.LastName,
  person.FirstName,
  persondetail.NSPNumber,
  persondetail.JoinYear,
  persondetail.PictureLink,
  persondetail.PersonTypeID,
  persondetail.BirthDate,
  personcontact.ContactItem,
  personcontact.ContactDetails,
  contacttype.ContactTypeID,
  contacttype.ContactType,
  patrolassignment.PatrolAssignment
FROM person
  LEFT OUTER JOIN persondetail
    ON person.PersonID = persondetail.PersonID
  LEFT OUTER JOIN personcontact
    ON persondetail.PrimaryContactID = personcontact.PersonContactID
  LEFT OUTER JOIN contacttype
    ON personcontact.ContactTypeID = contacttype.ContactTypeID
  LEFT OUTER JOIN personpatrol
    ON person.PersonID = personpatrol.PersonID
  INNER JOIN patrolassignment
    ON personpatrol.PatrolAssignmentID = patrolassignment.PatrolAssignmentID
