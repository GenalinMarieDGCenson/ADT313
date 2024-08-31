import logo from './logo.svg';
import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
const UserInformation={
  firstName: 'Genalin Marie',
  lastName: 'Censon',
  section: 'BSIT 3A',
  description: 'kind'
}


  return (
    <div className="App">
      <Name firstname={UserInformation.firstName}lastname={UserInformation.lastname}/>
      <Section section={UserInformation.section}/>
      <Description description={UserInformation.description}/>
    </div>
  );
}

export default App;
