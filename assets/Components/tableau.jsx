import React from 'react';
import ElementTableau from './elementTableau';
import Moment from 'react-moment'

const Table = ({tabParents, numberParent=1, numberEnfant=1}) => {
    return ( 
        <>
            <table>
                <tbody>
                    <tr>
                        {
                            tabParents.map((person) =>
                                {if (person.generation == 2) {
                                    return <ElementTableau
                                        key={person.id}
                                        lienImage={person.pictureName}
                                        prenomNom={person.firstName + " " + person.name}
                                        dateDeNaissance= {
                                            <Moment format="DD/MM/YYYY">
                                                {person.birthday}
                                            </Moment>
                                        }
                                        number={numberParent}
                                    />
                                }
                                }
                        )}
                    </tr>
                    <tr>
                        {
                            tabParents.map((person) =>
                            {if (person.generation == 3 && person.familyNumber < 75) {
                                return <ElementTableau
                                    key={person.firstName}
                                    lienImage={person.pictureName}
                                    prenomNom={person.firstName + " " + person.name}
                                    dateDeNaissance= {
                                        <Moment format="DD/MM/YYYY">
                                            {person.birthday}
                                        </Moment>
                                    }
                                    link={person.link}
                                    number={numberEnfant}
                                />
                            }
                            }
                        )}
                    </tr>
                    <tr>
                        {
                            tabParents.map((person) =>
                            {if (person.generation == 3 && person.familyNumber > 74 && person.familyNumber < 80) {
                                return <ElementTableau
                                    key={person.firstName}
                                    lienImage={person.pictureName}
                                    prenomNom={person.firstName + " " + person.name}
                                    dateDeNaissance= {
                                        <Moment format="DD/MM/YYYY">
                                            {person.birthday}
                                        </Moment>
                                    }
                                    link={person.link}
                                    number={numberEnfant}
                                />
                            }
                            }
                        )}
                    </tr>
                </tbody>
            </table>
        </>
     );
}
 
export default Table;