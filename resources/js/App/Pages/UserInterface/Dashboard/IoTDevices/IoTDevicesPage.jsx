import React, {useContext, useEffect, useState} from 'react'
import IoTDevicesList from './Components/IoTDevicesList';
import Cookies from 'js-cookie';
import { isArray } from 'lodash';
import { IoTDeviceContext } from '../../../../Context/IoTDeviceContext';
import { GeneralContext } from '../../../../Context/GeneralContext';
import { SearchContext } from '../../../../Context/SearchContext';
import Spinner from '../../../../MainComponents/Spinner';
import Search from '../../../../MainComponents/Search';

const IoTDevicesPage = () => {
  const { loading, message, getAllIoTDevices, IoTDevices, } = useContext(IoTDeviceContext);  
  const { getCommonObjects } = useContext(SearchContext);  
  const { channelMessage, subscribeWSChannel } = useContext(GeneralContext);
  const [dashboard_IoTDevices, setIoTDevicesState] = useState([])

  useEffect(async () => {
    subscribeWSChannel('dashboard-IoTDevices-channel');
    await getAllIoTDevices();
  }, []);

  useEffect(async () => {
    // await setIoTDevicesState(Cookies.get('channelMessage'));
    await setIoTDevicesState(channelMessage);

    console.log('dashboard_IoTDevices2 ', Cookies.get('channelMessage'));
    console.log('dashboard_IoTDevices2 ', dashboard_IoTDevices);
  // }, [Cookies.get('channelMessage')]);
  }, [channelMessage]);


  return (<>
    <section className="w-11/12 mx-auto my-5">      
      <h1 className="text-lg font-bold text-blue-dark mb-5">Dashboard</h1>
      
      {loading && (<>
        <div className="flex flex-col justify-center items-center h-screen">
          <Spinner />
        </div>
      </>)}

      {!loading && dashboard_IoTDevices && isArray(dashboard_IoTDevices) && dashboard_IoTDevices.length>=1 ? (<>
        <Search array={dashboard_IoTDevices} />
        
        <div className='flex flex-row flex-wrap mt-5 gap-y-5 lg:justify-between justify-start -mx-2'>
          <IoTDevicesList IoTDevices={dashboard_IoTDevices} />  
        </div>    
      </>) : !loading && IoTDevices && IoTDevices.length>=1 ? (<>
        <Search array={IoTDevices.map((IoTDevice, index) => { return { ...IoTDevice, };})} />
        
        <div className='flex flex-row flex-wrap mt-5 gap-y-5 lg:justify-between justify-start -mx-2'>
          <IoTDevicesList IoTDevices={IoTDevices} />  
        </div> 
      </>) : (
        <div className="flex flex-col justify-center items-center h-screen">
          <h1 className="text-center font-extrabold text-2xl">{`There is not any device`}</h1>
        </div>
      )}
      
    </section>
  </>);
}

export default IoTDevicesPage