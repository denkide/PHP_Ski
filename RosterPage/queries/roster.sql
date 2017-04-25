SELECT
  person.LastName,
  person.FirstName,
  person.DateCreated,
  patrolassignment.PatrolAssignment,
  personpatrol.PatrolAssignmentID,
  person.PersonID,
  persontype.PersonType,
  persondetail.PictureLink,
  persondetail.NSPNumber,
  persondetail.PrimaryContactID
FROM person
  LEFT OUTER JOIN personpatrol
    ON person.PersonID = personpatrol.PersonID
  LEFT OUTER JOIN patrolassignment
    ON personpatrol.PatrolAssignmentID = patrolassignment.PatrolAssignmentID
  INNER JOIN persondetail
    ON person.PersonID = persondetail.PersonID
  LEFT OUTER JOIN persontype
    ON persondetail.PersonTypeID = persontype.PersonTypeID