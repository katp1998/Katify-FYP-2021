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
image = cv2.imread("E:\BeautBeta\IP_application/test2.jpg") #test: cannot add with multiple faces
rgb_image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB) 
height, width, _ = image.shape

#defining the colour boundaries
colour_categories = [
    ([244,212,187], [239, 207, 169]), #cat 1 - porcelaine
    ([239, 207, 169], [242, 196, 144]), #cat 2 - ivory
    ([242, 196, 144], [229, 202, 155]), #cat 3 - warm ivory and sand
    ([229, 202, 155], [222, 179, 126]), #cat 4 - beige
    ([222, 179, 126], [209, 149, 86]), #cat 5 - warm beige and natural
    ([209, 149, 86], [199, 146, 78]), #cat 6 - honey
    ([199, 146, 78], [189, 128, 73]), #cat 7 - golden
    ([189, 128, 73], [133, 82, 39]) #cat 8 - almond chestnut and expresso
]

#process image
result = face_mesh.process(rgb_image)
for facialLandmarks in result.multi_face_landmarks:
    #specific landmarks are detected through the mediapipe library are considered here because not all landmarks are valid
    landmarks_array = [3, 6, 8, 9, 32, 36, 69, 67, 109, 108, 101, 116, 117, 135, 16, 148, 151, 172, 169, 171, 152, 165, 170, 175, 199, 194, 192, 187, 200, 211, 204, 202, 207, 206, 210, 216, 228, 229, 266, 262, 277, 275, 273, 280, 281, 297, 299, 298, 330, 323, 343, 338, 337, 333, 343, 349, 348, 347, 350, 371, 357, 351, 396, 377, 391, 393, 423, 411, 420, 419, 421, 418, 422, 424, 429, 437, 425, 426, 432, 427, 436, 434, 430, 431, 428, 449, 448, 450, 451, 452]
    for i in landmarks_array:
        pt =facialLandmarks.landmark[i]
        x = int(pt.x * width)
        y = int(pt.y * height)
        ptcor = (x,y)
        cv2.circle(image, (x,y), 3, (255,255,255), -1)
        #cv2.putText(image, str(i), (x,y), cv2.FONT_HERSHEY_SIMPLEX, 1, (0,0,0), 2) >> this is to print the number of the landmark
        color_array.append(ptcor)

mean_cor = np.mean(color_array, axis=0)
print(mean_cor)        
cv2.imshow("Image", image)
cv2.waitKey(0)

#looping over the bounda

