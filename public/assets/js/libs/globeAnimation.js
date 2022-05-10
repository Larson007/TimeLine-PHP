const globeAnimation = () => {
    document.addEventListener('DOMContentLoaded', () =>{
        VANTA.GLOBE({
            el: ".globe-animation",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            size: 1,
            color: 0x84acfc,
            color2: 0xfeca72,
            backgroundColor: 0x434961
        });
    });
};

export default globeAnimation;