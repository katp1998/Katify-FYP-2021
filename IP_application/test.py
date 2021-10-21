import cv2
import mediapipe as mp
from mediapipe.python.solutions import face_mesh
import numpy as np

#init main point array
color_array = []

#to access facemesh lib from mediapipe to identify facial landmarks
mpFaceMesh = mp.solutions.face_mesh
face_mesh = mpFaceMesh.FaceMesh()

#getting image
image = cv2.imread("E:\BeautBeta\IP_application/test3.jpg") #test: cannot add with multiple faces
rgb_image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB) 
height, width, _ = image.shape

#process image
result = face_mesh.process(rgb_image)
for facialLandmarks in result.multi_face_landmarks:
    for i in range(0,52):
        pt =facialLandmarks.landmark[i]
        x = int(pt.x * width)
        y = int(pt.y * height)
        ptcor = (x,y)
        cv2.circle(image, (x,y), 2, (100,100,0), -1) 
        #cv2.putText(image, str(i), (x,y), cv2.FONT_HERSHEY_SIMPLEX, 1, (0,0,0), 2)
        color_array.append(ptcor)

mean_cor = np.mean(color_array, axis=0)
print(mean_cor)        
cv2.imshow("Image", image)
cv2.waitKey(0)


